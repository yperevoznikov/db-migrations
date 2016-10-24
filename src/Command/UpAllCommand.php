<?php

namespace YpDbMigrations\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpAllCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('up:all')
            ->setDescription('Runs all migrations');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}