<?php

use Phinx\Migration\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class CreateAdminSeedMigration extends AbstractMigration
{
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);
        //Admin 1 
        $populator->addEntity(
            'Users',
            1,
            [
                'first_name' => 'Sebastián',
                'last_name' => 'González Riffo',
                'email' => 'admin@eclass.com',
                'password' => function () {
                    return 'password';
                },
                'role' => 'admin',
                'active' => 1,
                'created' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                },
                'modified' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                }
            ]
        );
        $populator->execute();

        //Admin 2
        $populator->addEntity(
            'Users',
            1,
            [
                'first_name' => 'Saúl',
                'last_name' => 'Escandón',
                'email' => 'saem@eclass.com',
                'password' => function () {
                    return 'password';
                },
                'role' => 'admin',
                'active' => 1,
                'created' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                },
                'modified' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                }
            ]
        );

        $populator->execute();

        //Visita 1
        $populator->addEntity(
            'Users',
            1,
            [
                'first_name' => 'María',
                'last_name' => 'Agustina',
                'email' => 'maria@eclass.com',
                'password' => function () {
                    return 'password';
                },
                'role' => 'visita',
                'active' => 1,
                'created' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                },
                'modified' => function () use ($faker) {
                    return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
                }
            ]
        );
        $populator->execute();
    }
}
