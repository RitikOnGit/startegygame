<?php namespace Maatwebsite\Excel;

use Config;
use PHPExcel_Settings;
use PHPExcel_Shared_Font;
use Maatwebsite\Excel\Readers\Html;
use Maatwebsite\Excel\Classes\Cache;
use Maatwebsite\Excel\Classes\PHPExcel;
use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\Parsers\ViewParser;
use Maatwebsite\Excel\Classes\FormatIdentifier;
use Maatwebsite\Excel\Readers\LaravelExcelReader;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;

/**
 *
 * LaravelExcel Excel ServiceProvider
 *
 * @category   Laravel Excel
 * @version    1.0.0
 * @package    maatwebsite/excel
 * @copyright  Copyright (c) 2013 - 2014 Maatwebsite (http://www.maatwebsite.nl)
 * @author     Maatwebsite <info@maatwebsite.nl>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class ExcelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */

	public function boot()
	{
		// Boot the package

		// Set the autosizing settings
		$this->setAutoSizingSettings();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->bindClasses();
		$this->bindReaders();
		$this->bindParsers();
		$this->bindPHPExcelClass();
		$this->bindWriters();
		$this->bindExcel();
	}

	/**
	 * Bind PHPExcel classes
	 * @return void
	 */
	protected function bindPHPExcelClass()
	{
		// Set object
		$me = $this;

		// Bind the PHPExcel class
		$this->app->singleton('phpexcel', function ($app) use ($me) {

			// Set locale
			$me->setLocale();
		
			// Set the caching settings
			$me->setCacheSettings();
		
			// Initialize PHPExcel
			return new PHPExcel();
		});
		
	}

	/**
	 * Bind writers
	 * @return void
	 */
	protected function bindReaders()
	{
		// Bind the laravel excel reader
		$this->app->singleton('excel.reader', function($app) {
			return new LaravelExcelReader($app['files'], $app['excel.identifier']);
		});
		

		// Bind the html reader class
		$this->app->singleton('excel.readers.html', function($app) {
			return new Html();
		});
		
	}

	/**
	 * Bind writers
	 * @return void
	 */
	protected function bindParsers()
	{
		// Bind the view parser
		$this->app->singleton('excel.parsers.view', function ($app) {
			return new ViewParser($app['excel.readers.html']);
		});
		
	}

	/**
	 * Bind writers
	 * @return void
	 */
	protected function bindWriters()
	{
		// Bind the excel writer
		$this->app->singleton('excel.writer', function ($app) {
			return new LaravelExcelWriter($app->make('Response'), $app['files'], $app['excel.identifier']);
		});
		
	}

	/**
	 * Bind Excel class
	 * @return void
	 */
	protected function bindExcel()
	{
		// Bind the Excel class and inject its dependencies
		$this->app->singleton('excel', function ($app) {
			return new Excel($app['phpexcel'], $app['excel.reader'], $app['excel.writer'], $app['excel.parsers.view']);
		});
		
	}

	/**
	 * Bind other classes
	 * @return void
	 */
	protected function bindClasses()
	{
		// Bind the format identifier
		$this->app->singleton('excel.identifier', function($app) {
			return new FormatIdentifier($app['files']);
		});
		
	}

	/**
	 * Set cache settings
	 * @return Maatwebsite\Excel\Classes\Cache
	 */
	public function setCacheSettings()
	{
		return new Cache();
	}

	/**
	 * Set locale
	 */
	public function setLocale()
	{
		$locale = Config::get('app.locale', 'en_us');
		PHPExcel_Settings::setLocale($locale);
	}

	/**
	 * Set the autosizing settings
	 */
	public function setAutoSizingSettings()
	{
		$method = Config::get('excel::export.autosize-method', PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX);
		PHPExcel_Shared_Font::setAutoSizeMethod($method);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array(
			'excel',
			'phpexcel',
			'excel.reader',
			'excel.readers.html',
			'excel.parsers.view',
			'excel.writer'
		);
	}
}