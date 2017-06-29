<?php


class Koatuu
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getT_koatuu_treeItemByID($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'php_base';
			$user = 'root';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM t_koatuu_tree WHERE ter_id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$t_koatuu_treeItem = $result->fetch();

			return $t_koatuu_treeItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getT_koatuu_treeList() 
	{

		$db = Db::getConnection();
		$koatuuList = array();

		$result = $db->query('SELECT ter_id, ter_pid, ter_name, ter_address, ter_type_id, ter_level, ter_mask, reg_id FROM t_koatuu_tree ORDER BY ter_id ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$koatuuList[$i]['ter_id'] = $row['ter_id'];
			$koatuuList[$i]['ter_pid'] = $row['ter_pid'];
			$koatuuList[$i]['ter_name'] = $row['ter_name'];
			$koatuuList[$i]['ter_address'] = $row['ter_address'];
			$koatuuList[$i]['ter_type_id'] = $row['ter_type_id'];
			$koatuuList[$i]['ter_level'] = $row['ter_level'];
			$koatuuList[$i]['ter_mask'] = $row['ter_mask'];
			$koatuuList[$i]['reg_id'] = $row['reg_id'];
			$i++;
		}

		return $koatuuList;
	
}

}