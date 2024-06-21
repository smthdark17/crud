<?php

namespace App\Application;

use http\QueryString;
use src\Core\Connection;


class MarkTable
{

	public static function create(int $id, int $mark, int $subject_id, int $student_id)
	{
		$query = Connection::prepare('INSERT INTO `mark` (`id`, `mark`, `subject_id`, `student_id`)' .
			' VALUES (:id, :mark, :subject_id, :student_id)');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->bindValue(':mark', $mark, \PDO::PARAM_INT);
		$query->bindValue(':subject_id', $subject_id, \PDO::PARAM_INT);
		$query->bindValue(':student_id', $student_id, \PDO::PARAM_INT);

		if (!$query->execute()) {
			echo "gmno peredelivay";
		}
	}

	public static function delete(int $id)
	{
		$query = Connection::prepare('DELETE FROM `mark` WHERE `id` = :id');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		if (!$query->execute()) {
			echo "sebya udali";
		}
	}

	public static function update(int $id, int $mark, int $subject_id, int $student_id)
	{
		$query = Connection::prepare('UPDATE `mark` SET `mark` = :mark, `subject_id` = :subject_id, `student_id` = :student_id' . ' WHERE `id` = :id');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->bindValue(':mark', $mark, \PDO::PARAM_INT);
		$query->bindValue(':subject_id', $subject_id, \PDO::PARAM_INT);
		$query->bindValue(':student_id', $student_id, \PDO::PARAM_INT);
		if (!$query->execute()) {
			echo "v sleduyushiy raz povezet bolshe";
		}
	}
}