<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Parse extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'parse:assign';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		phpinfo();
		print_r($this->option());
		$this->info('php info ok');
		$this->error('error'); 
		//$this->secret($pass); 
		if($this->confirm('are you shure?[yes|no]'))
		{
			$this->info('php info ok');
		} 
		else
		{
			$this->error('no'); 
	
		}
 
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['example', InputArgument::OPTIONAL, 'An example argument.'],//OPTIONAL - НЕ ОБЯЗАТЕЛЬНО,protected $commands - в Kernel регистрация
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
