<?php
	class RandomGenerator {
		protected $characters;
		private $lowercaseLetters; // 0
		private $uppercaseLetters; // 1
		private $numbers;		   // 2
		private $punctuation;	   // 3

		/*
			@return void
		*/
		public function __construct() {
			$this->numbers = str_split('0123456789');
			$this->lowercaseLetters = str_split('abcdefghijklmnopqrstuvwxyz'); 
			$this->uppercaseLetters = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
			$this->punctuation = str_split('!@#$%^&*()\'');
		}

		public function retrieveCharacters() {
			return $this->numbers;
		}
	}

	print_r((new RandomGenerator)->retrieveCharacters());