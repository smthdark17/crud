<?php

namespace App\Application;

use http\QueryString;
use src\Core\Connection;

class UserTable
{

	public static function create(int $id, string $name, string $surname, int $group_id)
	{
		$query = Connection::prepare('INSERT INTO `student` (`id`, `name`, `surname`, `group_id`)' .
			'VALUES (:id, :name, :surname, :group_id);');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->bindValue(':name', $name);
		$query->bindValue(':surname', $surname);
		$query->bindValue(':group_id', $group_id, \PDO::PARAM_INT);
		if (!$query->execute()) {
			echo "gmno peredelivay";
		}
	}

	public static function delete(int $id)
	{
		$query = Connection::prepare('DELETE FROM `student` WHERE `id` = :id');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		if (!$query->execute()) {
			echo "sebya udali";
		}
	}

	public static function update(int $id, string $name, string $surname, int $group_id)
	{
		$query = Connection::prepare('UPDATE `student`' . 'where id = :id AND `group_id` = :group_id');
	}

}