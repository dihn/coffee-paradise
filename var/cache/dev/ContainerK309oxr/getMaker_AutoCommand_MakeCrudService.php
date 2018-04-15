<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_crud' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
include_once $this->targetDirs[3].'\\vendor\\koff\\crud-maker-bundle\\src\\Maker\\MakeCrud.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';

$this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Koff\Bundle\CrudMakerBundle\Maker\MakeCrud(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'))), ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php')));

$instance->setName('make:crud');

return $instance;
