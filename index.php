<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<!-- Basic Stuff for Page -->
		<meta charset="utf-8">
		<title>Alex's Minecraft Server</title>
		<meta name="description" content="Website for Alex's personal Minecraft server.">
		<meta name="author" content="Alexander Lyons">

		<!-- Mobile specific settings -->
		<meta name="viewport" content="width=device-width, initial-sacle=1">

		<!-- CSS -->
		<link rel="stylesheet" href="css/skeleton.css">
	</head>
	<body>
		<div class="container">
			<h1>Welcome to the Server</h1>
			<p>Hey everyone, this is the Minecraft server of Alex. I am currently running a Feed the Beast - Departed server. If you know who I am, please feel free to message me and join the server. If you found this by chance, I must ask that you please don't connect to the server, I am currently running this for friends/as a pet project, and am not looking at moderating a public server.</p>
			<h2>What's Happening</h2>
			<p>We are currently running together and have a base pretty close to spawn. Please be respectful of the work everyone is doing as we are all working together to start going to different dimensions and survive.</p>
			<h2>Server Status</h2>
			<?php
    				require_once(__DIR__.'/php/MinecraftQuery.php');
    				require_once(__DIR__.'/php/MinecraftQueryException.php');

	    			use xPaw\MinecraftQuery;
    				use xPaw\MinecraftQueryException;

    				$Query = new MinecraftQuery( );

	    			try
    				{
        				$Query->Connect( 'localhost', 25565 );

					echo "<p>The server is currently online!</p>";
	        			//print_r( $Query->GetInfo( ) );

					/* Print all of the Players who are online! */
        				//print_r( $Query->GetPlayers( ) );
					$players = $Query->GetPlayers();
					$playerCount = count($players);
					//print_r($players);
					$noPlayersOnline = gettype($players) == "boolean";

					echo "<h3>Who's online?</h3>";

					if ($noPlayersOnline) {
						echo "<p>No one is currently online...</p>";
					} else {
						$playerTable = "<table style=\"width:100%\"><tr><th>Avatar</th><th>Name</th></tr>";

						for($i = 0; $i < $playerCount; $i++) {
							$playerTable .= "<tr>";
							$playerTable .= "<td><img src=\"https://mcapi.ca/skin/3d/" . $players[$i] . "/55\"></td>";
							$playerTable .= "<td>" . $players[$i] . "</td>";
							$playerTable .= "</tr>";
						}

						$playerTable .= "</table>";

						echo $playerTable;
					}
    				}
	    			catch( MinecraftQueryException $e )
    				{
					echo "<p>The server is currently offline. Please let me know.</p>";
        				echo $e->getMessage( );
	    			}
			?>
			<h2>Mod Pack</h2>
			<h3>Current Mod Pack</h3>
			<p>Feed the Beast - Regrowth [0.7.4] can be found in the third party tab of the FTB Launcher. A link to the wiki is <a href="http://ftbwiki.org/Regrowth">here</a>.</a></p>
			<h3>Previous Mod Pack</h3>
			<p>Feed the Beast - Departed [1.4.0] can be found <a href="http://www.feed-the-beast.com/projects/ftb-departed">here</a>.</p>
			<p>Server Mapping is currently down, will add soon. (Hopefully not Blizzard soon, but you know).</p>
			<!-- <p>I've also added <a href="http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1286593-dynmap-dynamic-web-based-maps-for-minecraft">Dynmap</a> to the server. You should be able to reach it if the server is running and my iptables didn't bork again.<br/>
			<a href="http://minecraft.alexanderlyons.net:8123">The Server Map</a></p> -->
			<h2>Server Info</h2>
			<p>Message me for the information for the server. We also have a Team Speak 3 server up for VoIP and when we are really killing mobs.</p>
			<h2>How do I get the mod pack?</h2>
			<p>This is actually the easy part, just go to the <a href="http://www.feed-the-beast.com/">Feed the Beast website</a> and download the stable launcher. Once you have installed that and logged into your Minecraft account, download the modpack via the launcher. Notice: Please download the correct version of the pack, the launcher defaults to 'Recommended' and that may not be the version the server is (read as the admin is lazy and doesn't update the server like he should). I will post a notice if the server is updated and try to make sure the server description is up to date as well.</p>
			<h2>About this Website</h2>
			<p>I wrote the basic php myself.</p>
			<h3>Skeleton</h3>
			<p>Skeleton is a set of css I like to use. It can be found <a href="http://getskeleton.com/">here</a>.</p>
			<h3>Minecraft Query</h3>
			<p>The server info is from <a href="https://github.com/xPaw/PHP-Minecraft-Query">PHP-Minecraft-Query</a>. Thanks for this code man.<br/>
			The license can be found <a href="php/LICENSE.txt">here</a>.<br/>
			Downloaded on December 30, 2015.</p>
			<h3>Contact Me</h3>
			<p>If you are having problems connecting to the server, please email me at pyroticblaziken+minecraft [at] gmail [dot] com.</p>
		</div>
	</body>
</html>
