<?php if (!defined(JZ_SECURE_ACCESS)) die ('Security breach detected.');
	/**
	* - JINZORA | Web-based Media Streamer -  
	* 
	* Jinzora is a Web-based media streamer, primarily desgined to stream MP3s 
	* (but can be used for any media file that can stream from HTTP). 
	* Jinzora can be integrated into a CMS site, run as a standalone application, 
	* or integrated into any PHP website.  It is released under the GNU GPL.
	* 
	* - Resources -
	* - Jinzora Author: Ross Carlson <ross@jasbone.com>
	* - Web: http://www.jinzora.org
	* - Documentation: http://www.jinzora.org/docs	
	* - Support: http://www.jinzora.org/forum
	* - Downloads: http://www.jinzora.org/downloads
	* - License: GNU GPL <http://www.gnu.org/copyleft/gpl.html>
	* 
	* - Contributors -
	* Please see http://www.jinzora.org/modules.php?op=modload&name=jz_whois&file=index
	* 
	* - Code Purpose -
	* This is the header for the default XML cache adaptor.
	*
	* @since 05.10.04
	* @author Ross Carlson <ross@jinzora.org>
	*/

if (!function_exists("jz_db_object_query")) {
	function jz_db_object_query($sql) {
		global $JZLINK;
		if (!isset($JZLINK)) {
			if (!$JZLINK = jz_db_connect())
				die ("could not connect to database.");
		}		
		$results = jz_db_query($JZLINK,$sql);
		
		// Now let's close out
		//jz_db_close($link);
		
		// Return the data
		return resultsToArray($results);
	}
}
	
if (!function_exists("jz_db_row_query")) {
	function jz_db_row_query($sql) {
		global $JZLINK;
		if (!isset($JZLINK)) {
			if (!$JZLINK = jz_db_connect())
				die ("could not connect to database.");
		}		
		$results = jz_db_query($JZLINK,$sql);
		
		// Now let's close out
		//jz_db_close($link);
		
		// Return the data
		return $results;
	}
}	

if (!function_exists("jz_db_simple_query")) {
	function jz_db_simple_query($sql) {
		global $JZLINK;
		if (!isset($JZLINK)) {
			if (!$JZLINK = jz_db_connect())
				die ("could not connect to database.");
		}		
		$results = jz_db_query($JZLINK,$sql);
		
		// Now let's close out
		//jz_db_close($link);
		
		// Return the data
		if ($results->rows > 0) {
			return $results->data[0];
		} else {
			return false;
		}
	}
}

	
?>