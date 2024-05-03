<?php

class ModelExtensionCtmenu extends Model
{
    //выполняется при установке модуля
    public function install()
    {
        // создание таблиц в БД
        // menus table
        $this->db->query("
                CREATE TABLE IF NOT EXISTS `ctmenu` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	PRIMARY KEY (`id`) USING BTREE
) COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;
            ");

        // menu table
        $this->db->query("
                CREATE TABLE IF NOT EXISTS `ctmenu_link` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`menu_id` INT(10) UNSIGNED NOT NULL,
	`parent_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`) USING BTREE
) COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;
            ");

        // menu_description table
        $this->db->query("
                CREATE TABLE IF NOT EXISTS `ctmenu_link_description` (
  `menu_link_id` INT(10) UNSIGNED NOT NULL,
	`language_id` INT(10) UNSIGNED NOT NULL,
	`title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`link` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	PRIMARY KEY (`menu_link_id`, `language_id`) USING BTREE
) COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;
            ");
    }
    // возвращает список меню из таблицы ctmenu
    public function getMenuList()
    {
        $query = $this->db->query("SELECT * FROM `ctmenu`");
        return $query->rows;
    }
    // возвращает информацию о конкретном меню по его идентификатору
    public function getMenu($menu_id)
    {
        $query = $this->db->query("SELECT * FROM ctmenu WHERE id = " . (int)$menu_id);
        return $query->row;
    }
    // добавляет новое меню в таблицу ctmenu и возвращает его идентификатор
    public function addMenu($data)
    {
        $this->db->query("INSERT INTO `ctmenu` SET `title` = '" . $this->db->escape($data['title']) . "' ");
        return $this->db->getLastId();
    }
    // обновляет название меню по его идентификатору
    public function editMenu($menu_id, $data)
    {
        $this->db->query("UPDATE `ctmenu` SET title = '" . $this->db->escape($data['title']) . "' WHERE id = " . (int)$menu_id);
    }
    //удаляет меню по его идентификатору, если у него нет связанных элементов в таблице ctmenu_link
    public function deleteMenu($menu_id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS cnt FROM `ctmenu_link` WHERE menu_id = " . (int)$menu_id);
        if (!$query->row['cnt']) {
            $query = $this->db->query("DELETE FROM `ctmenu` WHERE id = " . (int)$menu_id);
            return true;
        }
        return false;
    }
    //возвращает древовидную структуру элементов меню для указанного меню
    public function getTreeItems($menu_id)
    {
        $menu_id = (int)$menu_id;
        $language_id = (int)$this->config->get('config_language_id');
        $query = $this->db->query("SELECT m.id, m.parent_id, md.title, md.link FROM ctmenu_link m
LEFT JOIN ctmenu_link_description md ON m.id = md.menu_link_id
WHERE m.menu_id = {$menu_id} and md.language_id = {$language_id}");
        $menu = [];
        foreach ($query->rows as $row) {
            $menu[$row['id']] = $row;
        }

        return $menu;
    }
    //преобразует плоскую структуру элементов меню в древовидную структуру (на самой странице сайта)
    public function getMapTree($dataset)
    {
        $tree = [];

        foreach ($dataset as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $dataset[$node['parent_id']]['children'][$id] = &$node;
            }
        }

        return $tree;
    }
    //добавляет новый элемент меню в таблицу ctmenu_link и его описание в таблицу ctmenu_link_description
    public function addMenuLink($menu_id, $data)
    {
        $this->db->query("INSERT INTO ctmenu_link SET menu_id = " . (int)$menu_id . ", parent_id = " . (int)$data['menu_description_parent']);
        $menu_link_id = $this->db->getLastId();
        foreach ($data['menu_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO ctmenu_link_description SET menu_link_id = " . (int)$menu_link_id . ", language_id = " . (int)$language_id . ", title = '" . $this->db->escape($value['title']) . "', link = '" . $this->db->escape($value['link']) . "'");
        }
    }
    //получения данных о ссылке меню и её родительском элементе
    public function getMenuLink($menu_link_id)
    {
        $query = $this->db->query("SELECT mld.*, ml.parent_id FROM ctmenu_link_description mld
LEFT JOIN ctmenu_link ml
ON mld.menu_link_id = ml.id
WHERE ml.id = " . (int)$menu_link_id);

        foreach ($query->rows as $row) {
            $menu_description_data[$row['language_id']] = [
                'id' => $row['menu_link_id'],
                'title' => $row['title'],
                'link' => $row['link'],
                'parent_id' => $row['parent_id'],
            ];
        }
        return $menu_description_data;
    }
    //получения данных о ссылке меню по её идентификатору
    public function getMenuLinkByLinkId($link_id)
    {
        $query = $this->db->query("SELECT * FROM ctmenu_link WHERE id = " . (int)$link_id);
        return $query->row;
    }
    //Удаление ссылки меню из таблицы
    public function deleteMenuLink($menu_link_id)
    {
        $menu_link_id = (int)$menu_link_id;
        $query = $this->db->query("SELECT COUNT(*) AS cnt FROM `ctmenu_link` WHERE parent_id = {$menu_link_id}");
        if (!$query->row['cnt']) {
            $this->db->query("DELETE FROM `ctmenu_link` WHERE id = {$menu_link_id}");
            $this->db->query("DELETE FROM `ctmenu_link_description` WHERE menu_link_id = {$menu_link_id}");
            return true;
        }
        return false;
    }
    //Обновление заголовка и ссылки для каждой языковой версии
    public function editMenuLink($menu_link_id, $data)
    {
        $menu_link_id = (int)$menu_link_id;
        $this->db->query("UPDATE ctmenu_link SET parent_id = " . (int)$data['menu_description_parent'] . " WHERE id = {$menu_link_id}");

        foreach ($data['menu_description'] as $language_id => $value) {
            $this->db->query("UPDATE ctmenu_link_description SET title = '" . $this->db->escape($value['title']) . "', link = '" . $this->db->escape($value['link']) . "' WHERE menu_link_id = {$menu_link_id} AND language_id = " . (int)$language_id);
        }
    }

}