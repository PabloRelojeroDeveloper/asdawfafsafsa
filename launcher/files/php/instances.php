<?php
$instance['selkie(whitelisted)'] = array_merge($instance['selkie(whitelisted)'], array(
    "loadder" => array(
        "minecraft_version" => "1.18.2",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'essential',
        'config',
        'logs',
        'saves',
        'screenshots',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt',
        'servers.dat'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Subs server",
        "ip" => "my-elections.gl.joinmc.link",
        "port" => 25565
    ),
));

$instance['squids'] = array_merge($instance['squids'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'essential',
        'logs',
        'saves',
        'screenshots',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Squids server",
        "ip" => "na18.holy.gg:25861",
        "port" => 25565
    ),
));
?>
