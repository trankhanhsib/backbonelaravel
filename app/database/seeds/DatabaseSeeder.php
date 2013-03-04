<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call('UserTableSeeder');
        $this->call('ContactsTableSeeder');
    }

}

class ContactsTableSeeder extends Seeder {

    public function run() {
        DB::table('contacts')->delete();

        Contact::create(
                array(
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                    'email_address' => 'john@example.com',
                    'description' => 'My best friend.'
                )
        );

        Contact::create(
                array(
                    'first_name' => 'Jane',
                    'last_name' => 'Doe',
                    'email_address' => 'jane@example.com',
                    'description' => 'My best friend\'s wife.'
                )
        );
        Contact::create(
                array(
                    'first_name' => 'Jeffrey',
                    'last_name' => 'Way',
                    'email_address' => 'jeffrey@envato.com',
                    'description' => 'Not sure why I have myself as a contact, but okay.'
                )
        );
    }

}
