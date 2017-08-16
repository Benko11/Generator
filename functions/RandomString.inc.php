<?php
	interface RandomStringInterface {
		public function __construct();

		// public function generateOutput($characters);

		public function string($length);     // everything except punctuation
		public function lowString($length);  // lowercase letters
		public function upString($length);   // uppercase letters
		public function numbers($length);    // numbers
		public function anyString($length);  // everything
		public function myString($length, $rules);   // user-defined parameters
	}