<?php
/**
 * Created on 27/10/16 09:45
 * @author Yuriy Perevoznikov
 */

namespace YpDbMigrations\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMigrationCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('create:migration')
            ->setDescription('Creates a new migration');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $migrationFolderName = $this->getFolderName();

        $migrationFolderPath = "sandbox/migrations/{$migrationFolderName}/";
        @mkdir($migrationFolderPath);

        $upFilepath = $migrationFolderPath . 'up.sql';
        @file_put_contents($upFilepath, 'Put SQL query here to change database');

        $downFilepath = $migrationFolderPath . 'down.sql';
        @file_put_contents($downFilepath, 'Put SQL query here to rollback database change made in up.sql');
    }

    private function getFolderName()
    {
        return "000002";
    }

}