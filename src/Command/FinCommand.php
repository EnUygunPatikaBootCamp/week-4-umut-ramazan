<?php
namespace  App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FinCommand extends Command
{
    /**
     * @return void
     */
    protected function configure()

    {
        $this
            ->setName('App:findNumber')
            ->setDescription('Girilen sayıların arasından en büyüğünü ve en küçük olan sayıyı size geri döndürür.')
            ;

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)

    {

        for ($i = 0; $i <= 10; $i++){
            $value[$i] = rand(1,600);
        }

        $io = new SymfonyStyle($input,$output);

        $io->title('Find Command');
        $io->section('Girilen sayıların arasından en büyüğünü ve en küçük olan sayıyı size geri döndürür.');
        $io->note('Sayıları Boşluk  ile ayırın!');
        $io->success('En Büyük Sayı :'.max($value));
        $io->warning('En Küçük Sayı :'.min($value));



        return Command::SUCCESS;
    }
}