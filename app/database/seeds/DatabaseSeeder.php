<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('userRollsTableSeeder');
		$this->command->info("User Rolls Table Seeded");
		
		$this->call('usersTableSeeder');
		$this->command->info("Users Table Seeded");

		$this->call('itemTableSeeder');
		$this->command->info("Item Table Seeded");
	}

}

class usersTableSeeder extends Seeder {
	public function run()
	{
		Eloquent::unguard();

		$adminUser = array('name' => 'Administrator', 'username' => 'admin', 'password' => Hash::make('laravel4') ,'user_level_id' => '1');
		DB::table('users')->insert($adminUser);
	}
}

class userRollsTableSeeder extends Seeder {
	public function run()
	{
		Eloquent::unguard();

		User_Level::create(array('name' => 'Administrator'));
		User_Level::create(array('name' => 'Employee Adjustment'));
		User_Level::create(array('name' => 'Employee Readonly'));
	}
}

class itemTableSeeder extends Seeder {
	public function run()
	{
		Eloquent::unguard();

		Item::create(array("id" => "11482", "name" => "Gallo Livingston Cellars Cabernet Sauvignon", "pack" => "1.5 lit", "slot_location" => "F22C01"));
        Item::create(array("id" => "11732", "name" => "Gallo Livingston Cellars Merlot", "pack" => "1.5 lit", "slot_location" => "F13A03"));
        Item::create(array("id" => "11492", "name" => "Gallo Livingston Cellars Chardonnay", "pack" => "1.5 lit", "slot_location" => "F03B02"));
        Item::create(array("id" => "11412", "name" => "Gallo Livingston Cellars White Zin", "pack" => "1.5 lit", "slot_location" => "G15A02"));
        Item::create(array("id" => "11392", "name" => "Gallo Livingston Cellars Chianti", "pack" => "1.5 lit", "slot_location" => "C10C05"));
        Item::create(array("id" => "11422", "name" => "Gallo Livingston Cellars Burgundy", "pack" => "1.5 lit", "slot_location" => "C27B02"));
        Item::create(array("id" => "11432", "name" => "Gallo Livingston Cellars Rhine", "pack" => "1.5 lit", "slot_location" => "F11A03"));
        Item::create(array("id" => "11462", "name" => "Gallo Livingston Cellars Chablis Blanc", "pack" => "1.5 lit", "slot_location" => "D17A02"));
        Item::create(array("id" => "11472", "name" => "Gallo Livingston Cellars Red Rose", "pack" => "1.5 lit", "slot_location" => "F07A01"));
        Item::create(array("id" => "11692", "name" => "Gallo Livingston Cellars Blush Chablis", "pack" => "1.5 lit", "slot_location" => "C04D02"));
        Item::create(array("id" => "11483", "name" => "Gallo Livingston Cellars Cabernet Sauvignon", "pack" => "3.0 lit", "slot_location" => "C18A01"));
        Item::create(array("id" => "11733", "name" => "Gallo Livingston Cellars Merlot", "pack" => "3.0 lit", "slot_location" => "C08A01"));
        Item::create(array("id" => "11493", "name" => "Gallo Livingston Cellars Chardonnay", "pack" => "3.0 lit", "slot_location" => "C14A06"));
        Item::create(array("id" => "11413", "name" => "Gallo Livingston Cellars White Zin", "pack" => "3.0 lit", "slot_location" => "C23B02"));
        Item::create(array("id" => "11393", "name" => "Gallo Livingston Cellars Chianti", "pack" => "3.0 lit", "slot_location" => "F04A01"));
        Item::create(array("id" => "11423", "name" => "Gallo Livingston Cellars Burgundy", "pack" => "3.0 lit", "slot_location" => "G08A01"));
        Item::create(array("id" => "11433", "name" => "Gallo Livingston Cellars Rhine", "pack" => "3.0 lit", "slot_location" => "G20A06"));
        Item::create(array("id" => "11463", "name" => "Gallo Livingston Cellars Chablis Blanc", "pack" => "3.0 lit", "slot_location" => "D20A03"));
        Item::create(array("id" => "11473", "name" => "Gallo Livingston Cellars Red Rose", "pack" => "3.0 lit", "slot_location" => "G05B01"));
        Item::create(array("id" => "11581", "name" => "Gallo Twin Valley Cabernet Sauvignon", "pack" => "750 ml", "slot_location" => "D02C04"));
        Item::create(array("id" => "11661", "name" => "Gallo Twin Valley Merlot", "pack" => "750 ml", "slot_location" => "G04C03"));
        Item::create(array("id" => "11591", "name" => "Gallo Twin Valley Chardonnay", "pack" => "750 ml", "slot_location" => "F16C07"));
        Item::create(array("id" => "11582", "name" => "Gallo Twin Valley Cabernet Sauvignon", "pack" => "1.5 lit", "slot_location" => "D08C07"));
        Item::create(array("id" => "11662", "name" => "Gallo Twin Valley Merlot", "pack" => "1.5 lit", "slot_location" => "G10C03"));
        Item::create(array("id" => "11702", "name" => "Gallo Twin Valley Cafe' Zinfandel", "pack" => "1.5 lit", "slot_location" => "F04C07"));
        Item::create(array("id" => "11592", "name" => "Gallo Twin Valley Chardonnay", "pack" => "1.5 lit", "slot_location" => "E53B05"));
        Item::create(array("id" => "11682", "name" => "Gallo Twin Valley Hearty Burgundy", "pack" => "1.5 lit", "slot_location" => "E59A05"));
        Item::create(array("id" => "11651", "name" => "Gallo Twin Valley White Zinfandel", "pack" => "750 ml", "slot_location" => "D20C07"));
        Item::create(array("id" => "11751", "name" => "Gallo Twin Valley White Merlot", "pack" => "750 ml", "slot_location" => "F20C04"));
        Item::create(array("id" => "11772", "name" => "Gallo Twin Valley Sauvignon Blanc", "pack" => "1.5 lit", "slot_location" => "C14A02"));
        Item::create(array("id" => "11652", "name" => "Gallo Twin Valley White Zinfandel", "pack" => "1.5 lit", "slot_location" => "F23A02"));
        Item::create(array("id" => "11752", "name" => "Gallo Twin Valley White Merlot", "pack" => "1.5 lit", "slot_location" => "D14C01"));
        Item::create(array("id" => "11611", "name" => "Gallo Vermouth, Sweet", "pack" => "750 ml", "slot_location" => "C07B03"));
        Item::create(array("id" => "11621", "name" => "Gallo Vermouth, Dry", "pack" => "750 ml", "slot_location" => "D23A03"));
        Item::create(array("id" => "11586", "name" => "Gallo Twin Valley Cabernet Sauvignon", "pack" => "6/4/187 ml", "slot_location" => "F08D01"));
        Item::create(array("id" => "11666", "name" => "Gallo Twin Valley Merlot", "pack" => "6/4/187 ml", "slot_location" => "G25A01"));
        Item::create(array("id" => "11596", "name" => "Gallo Twin Valley Chardonnay", "pack" => "6/4/187 ml", "slot_location" => "C03B03"));
        Item::create(array("id" => "11656", "name" => "Gallo Twin Valley White Zinfandel", "pack" => "6/4/187 ml", "slot_location" => "G09B02"));
        Item::create(array("id" => "11201", "name" => "Gallo Fairbanks Sherry", "pack" => "750 ml", "slot_location" => "D26C06"));
        Item::create(array("id" => "11211", "name" => "Gallo Fairbanks Cream Sherry", "pack" => "750 ml", "slot_location" => "F10C03"));
        Item::create(array("id" => "11221", "name" => "Gallo Fairbanks White Port", "pack" => "750 ml", "slot_location" => "C18C06"));
        Item::create(array("id" => "11231", "name" => "Gallo Fairbanks Dark Port", "pack" => "750 ml", "slot_location" => "D24C03"));
        Item::create(array("id" => "11202", "name" => "Gallo Fairbanks Sherry", "pack" => "1.5 lit", "slot_location" => "G10D04"));
        Item::create(array("id" => "11212", "name" => "Gallo Fairbanks Cream Sherry", "pack" => "1.5 lit", "slot_location" => "G26C05"));
        Item::create(array("id" => "11222", "name" => "Gallo Fairbanks White Port", "pack" => "1.5 lit", "slot_location" => "C02C04"));
        Item::create(array("id" => "11232", "name" => "Gallo Fairbanks Dark Port", "pack" => "1.5 lit", "slot_location" => "D11A03"));
        Item::create(array("id" => "11242", "name" => "Gallo Fairbanks Pale Dry Sherry", "pack" => "1.5 lit", "slot_location" => "E38A04"));
        Item::create(array("id" => "11941", "name" => "Andre' Dry Champagne", "pack" => "750 ml", "slot_location" => "C23A03"));
        Item::create(array("id" => "11981", "name" => "Andre' Brut", "pack" => "750 ml", "slot_location" => "E48B02"));
        Item::create(array("id" => "11501", "name" => "Andre' Spumante", "pack" => "750 ml", "slot_location" => "C07B01"));
        Item::create(array("id" => "11511", "name" => "Andre' Strawberry", "pack" => "750 ml", "slot_location" => "EE1AD"));
        Item::create(array("id" => "11951", "name" => "Andre' Pink Champagne", "pack" => "750 ml", "slot_location" => "E51B01"));
        Item::create(array("id" => "11971", "name" => "Andre' Cold Duck", "pack" => "750 ml", "slot_location" => "C14C01"));
        Item::create(array("id" => "11883", "name" => "Carlo Rossi Blush", "pack" => "3.0 lit", "slot_location" => "C04A05"));
        Item::create(array("id" => "11964", "name" => "Carlo Rossi Cabernet Sauvignon", "pack" => "4.0 lit", "slot_location" => "G18A01"));
        Item::create(array("id" => "11804", "name" => "Carlo Rossi Chianti", "pack" => "4.0 lit", "slot_location" => "F16A06"));
        Item::create(array("id" => "11834", "name" => "Carlo Rossi White Zinfandel", "pack" => "4.0 lit", "slot_location" => "D12A02"));
        Item::create(array("id" => "11334", "name" => "Carlo Rossi Paisano", "pack" => "4.0 lit", "slot_location" => "G09A01"));
        Item::create(array("id" => "11844", "name" => "Carlo Rossi Burgundy", "pack" => "4.0 lit", "slot_location" => "F09A02"));
        Item::create(array("id" => "11824", "name" => "Carlo Rossi Chablis", "pack" => "4.0 lit", "slot_location" => "D03A02"));
        Item::create(array("id" => "11854", "name" => "Carlo Rossi Rhine", "pack" => "4.0 lit", "slot_location" => "F19A01"));
        Item::create(array("id" => "11814", "name" => "Carlo Rossi Vin Rose", "pack" => "4.0 lit", "slot_location" => "C12A05"));
        Item::create(array("id" => "11884", "name" => "Carlo Rossi Blush", "pack" => "4.0 lit", "slot_location" => "G22A05"));
        Item::create(array("id" => "11874", "name" => "Carlo Rossi Sangria", "pack" => "4.0 lit", "slot_location" => "F03B01"));
        Item::create(array("id" => "11271", "name" => "Gallo Sheffield Crm Sherry", "pack" => "750 ml", "slot_location" => "D08C06"));
        Item::create(array("id" => "11281", "name" => "Gallo Sheffield Tawny Port", "pack" => "750 ml", "slot_location" => "G14C07"));
        Item::create(array("id" => "11291", "name" => "Gallo Sheffield Very Dry Sherry", "pack" => "750 ml", "slot_location" => "C20C06"));
        Item::create(array("id" => "11272", "name" => "Gallo Sheffield Crm Sherry", "pack" => "1.5 lit", "slot_location" => "D18D02"));
        Item::create(array("id" => "11282", "name" => "Gallo Sheffield Tawny Port", "pack" => "1.5 lit", "slot_location" => "E60A01"));
        Item::create(array("id" => "11292", "name" => "Gallo Sheffield Very Dry Sherry", "pack" => "1.5 lit", "slot_location" => "E44A01"));
        Item::create(array("id" => "11171", "name" => "Boone's Sangria", "pack" => "750 ml", "slot_location" => "G21B01"));
        Item::create(array("id" => "11121", "name" => "Boone's Strawberry Hill", "pack" => "750 ml", "slot_location" => "D03B04"));
        Item::create(array("id" => "11151", "name" => "Boone's Blue Hawaiian", "pack" => "750 ml", "slot_location" => "D02C03"));
        Item::create(array("id" => "11191", "name" => "Boone's Snow Creek Berry", "pack" => "750 ml", "slot_location" => "G17B01"));
        Item::create(array("id" => "11301", "name" => "Boone's Strawberry Daiquiri", "pack" => "750 ml", "slot_location" => "C17A03"));
        Item::create(array("id" => "11321", "name" => "Boone's Fuzzy Navel", "pack" => "750 ml", "slot_location" => "D19A03"));
        Item::create(array("id" => "12111", "name" => "Mogen David Concord", "pack" => "750 ml", "slot_location" => "E52B03"));
        Item::create(array("id" => "12121", "name" => "Mogen David Blackberry", "pack" => "750 ml", "slot_location" => "F14C03"));
        Item::create(array("id" => "12112", "name" => "Mogen David Concord", "pack" => "1.5 lit", "slot_location" => "C26C01"));
        Item::create(array("id" => "12122", "name" => "Mogen David Blackberry", "pack" => "1.5 lit", "slot_location" => "G02C01"));
	}
}

