<?php

namespace App\Application;

use http\QueryString;
use src\Core\Connection;


class StudentGroupTable
{

	public static function create(int $id, string $name)
	{
		$query = Connection::prepare('INSERT INTO `student_group` (`id`, `name`)' .
			' VALUES (:id, :name)');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->bindValue(':name', $name, \PDO::PARAM_STR);

		if (!$query->execute()) {
			echo "gmno peredelivay";
		}
	}

	public static function delete(int $id)
	{
		$query = Connection::prepare('DELETE FROM `student_group` WHERE `id` = :id');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		if (!$query->execute()) {
			echo "sebya udali";
		}
	}

	public static function update(int $id, string $name)
	{
		$query = Connection::prepare('UPDATE `student_group` SET `name` = :name' . ' WHERE `id` = :id');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->bindValue(':name', $name, \PDO::PARAM_STR);

		if (!$query->execute()) {
			echo "v sleduyushiy raz povezet bolshe";
		}
	}
}