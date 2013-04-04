<?php

	class StaticAsset {

		/**
		 * This function will get the last modified time and append it to the file name
		 * making it safer to make changes to files that have likely been cached before.
		 * 
		 * @param  string $path_to_file 	Path to file
		 * @return string 					Returns the full path to file with appended version            
		 */
		
		public static function version($path_to_file=''){

			// Prevent function errors if $path_to_file does not exist
			if (is_file($path_to_file)){
				$modified = filemtime($path_to_file);
				$path_to_file .= '?v='.$modified;
				return $path_to_file;
			}

		}

	}

?>