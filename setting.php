<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "vUw5VdsYq+RMeebwB+5FL0WQETc5RI/a3EEXAj+bBhxyrzcgvPYU5F8Ij0wsi53cCgzHivaVPu3EA/Zn6SRqiG3cdw0PTaBxgqhSL7t9sGi2xRyM/yEaQE7ektnMgQ6mdp08LdTavtLqBn8HGfT7DQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "ed71d32a989c16a72b4770d4fbbd0c27";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
