<?php
	class RandomGenerator {
		protected $characters = array(); // the list of characters that the string will be generated from
		public $group = array();		 // the list of character groups

		// use 'default' or 0 to access default restrictions or define your own
		public $restrictions;

		private $aliases;

		/*
			@return void
		*/
		public function __construct() {
			$this->group = [
				0 => [
					'name' 	  => 'lowercaseletters',
					'list'    => 'abcdefghijklmnopqrstuvwxyz',
					'aliases' => [
						'lowletters',
						'lowercase',
						'low'
					]
				],

				1 => [
					'name' 	  => 'uppercaseletters',
					'list' 	  => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
					'aliases' => [
						'upletters',
						'uppercase',
						'up'
					]
				],

				2 => [
					'name' => 'numbers',
					'list' => '0123456789',
					'aliases' => [
						'numerals',
						'num'
					]
				],

				3 => [
					'name' => 'punctuation',
					'list' => "!@#$%^&*()'",
					'aliases' => [
						'other'
					]
				]
			];
		}

		/*
		@return array characters
		*/
		public function retrieveCharacters() {
			

			return $this->characters;
		}
	}

	print_r((new RandomGenerator)->retrieveCharacters());