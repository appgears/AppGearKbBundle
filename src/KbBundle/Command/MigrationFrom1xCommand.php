<?php

namespace AppGear\KbBundle\Command;

use AppGear\KbBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for migration KbBundle data from 1.x platform (stored in MySQL) to platform 2.x (stored with PHPCR)
 */
class MigrationFrom1xCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('appgear:kb:migration-from-1x')
            ->setDescription('Move kb data from old MySQL storage to the new PHPCR storage')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $oldStorage = $this->getContainer()->get('ag.storage');
        $newStorage = $this->getContainer()->get('appgear.storage');

        $categories = $oldStorage->find('AppGear\KbBundle\Entity\Category');
        foreach ($categories as $category) {
            /* @var $category Category */
            $output->writeln($category->getName());
            $categoriesRepository = $newStorage->getRepository('appgear.kb_bundle.entity.category');
            $categoriesRepository->save($category);
        }

        $output->writeln('Complete!');
    }
}