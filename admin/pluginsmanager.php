<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Include starter
include 'adminstarter.php';

if (isset($_GET['act'])) {

	$act = $_GET['act'];
	if ($act == 'list') {
		
		$getPlugins = $admin -> getPlugins();

		$plugin_list = new phphooks();
		$plugin_headers = $plugin_list -> get_plugins_header();
		$api = array();
		$i = 0;

		foreach ($plugin_headers as $tid => $plugin_header) {
			$action = false;
			foreach ($getPlugins as $result_row)
				if ($plugin_header['filename'] == $result_row['filename'] && $result_row['action'] == 1)
					$action = true;

			if ($action)
				$api[$i]["active"] = "class='active'";
			else
				$api[$i]["active"] = "";
			// Plugin Data
			$api[$i]["Name"] = $plugin_header['Name'];
			$api[$i]["Version"] = $plugin_header['Version'];
			$api[$i]["Description"] = $plugin_header['Description'];
			$api[$i]["AuthorURI"] = $plugin_header['AuthorURI'];
			$api[$i]["Author"] = $plugin_header['Author'];
			$api[$i]["Icon"] = $plugin_header['Icon'];
			if ($action) {
				$api[$i]["linkAdd"] = '<a class="btn btn-danger" data-filename="' . $plugin_header['filename'] . '" data-type="deactivate" href="pluginsmanager.php?act=edit" id="actionplugin">Deactivate</a>';
				$api[$i]["Status"] = '<span class="green">Activated</span>';
			} else {
				$api[$i]["linkAdd"] = '<a class="btn btn-success" data-filename="' . $plugin_header['filename'] . '" data-type="activate" href="pluginsmanager.php?act=edit" id="actionplugin">Activate</a>';
				$api[$i]["Status"] = '<span class="red">Dectivated</span>';
			}

			$i++;
		}
		$smarty -> assign("api", $api);
		$smarty -> display('pluginsmanager.html');

	} elseif ($act == 'edit') {

		switch ($_GET ['type']) {
			case "deactivate" :
				$plugname = $_GET['filename'];
				$sql = "UPDATE plugins SET action = 0 WHERE filename='$plugname'";
				$quary = $mysqli -> query($sql) or die("Database Error: " . mysql_error());

				if ($quary === true) {exit('success');
				} else {exit('error');
				}

				break;
			case "activate" :
				$plugname = $_GET['filename'];
				$sql = "SELECT * FROM plugins WHERE filename = '$plugname'";
				$quary = $mysqli -> query($sql) or die("Database Error: " . mysql_error());
				$num_rows = mysqli_num_rows($quary);

				if ($num_rows < 1) {
					$filename = $_GET['filename'];
					$action = 1;
					$sql = "INSERT into plugins (filename,action) VALUES ('$filename',($action))";
					$quary = $mysqli -> query($sql) or die("Database Error: " . mysql_error());

					if ($quary === true) {exit('success');
					} else {exit('error');
					}

				} else {
					$plugname = $_GET['filename'];
					$sql = "UPDATE plugins SET action = 1 WHERE filename='$plugname'";
					$quary = $mysqli -> query($sql) or die("Database Error: " . mysql_error());

					if ($quary === true) {exit('success');
					} else {exit('error');
					}

				}
				break;
		}

	}

}
