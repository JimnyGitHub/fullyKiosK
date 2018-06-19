<?php

/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/
/*
 -- info --
  //Redpine Signals, Inc.

/* * ***************************Includes********************************* */
require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

class fullyKiosK extends eqLogic {
	public static $_widgetPossibility = array('custom' => true);
	/*     * *************************Attributs****************************** */

	public static $_infosMap = array();
	public static $_actionMap = array();
	/*     * ***********************Methode static*************************** */

	/*
	* Fonction exécutée automatiquement toutes les minutes par Jeedom
	public static function cron() {

	}

	*/

	
	
	public static function initInfosMap(){

		self::$_actionMap = array(
			'screenOn' => array(
				'name' => 'ScreenOn',
				'cmd' => 'screenOn',
			),
			'screenOff' => array(
				'name' => 'ScreenOff',
				'cmd' => 'screenOff',
			),
			'clearCache' => array(
				'name' => 'clearCache',
				'cmd' => 'clearCache',
			),	
			'forceSleep' => array(
				'name' => 'forceSleep',
				'cmd' => 'forceSleep',
			),	
			'startScreensaver' => array(
				'name' => 'startScreensaver',
				'cmd' => 'startScreensaver',
			),	
			'stopScreensaver' => array(
				'name' => 'stopScreensaver',
				'cmd' => 'stopScreensaver',
			),	
			'startDaydream' => array(
				'name' => 'startDaydream',
				'cmd' => 'startDaydream',
			),	
			'stopDaydream' => array(
				'name' => 'stopDaydream',
				'cmd' => 'stopDaydream',
			),		
			'popFragment' => array(
				'name' => 'popFragment',
				'cmd' => 'popFragment',
			),	
			
			'loadURL' => array(
				'name' => 'loadURL',
				'cmd' => 'loadURL&url=#message#',
				'subtype' => 'message',

			),
			'loadStartURL' => array(
				'name' => 'loadStartURL',
				'cmd' => 'loadStartURL',
			),
			'restartApp' => array(
				'name' => 'restartApp',
				'cmd' => 'restartApp',
			),
			'exitApp' => array(
				'name' => 'exitApp',
				'cmd' => 'exitApp',
			),
	
			'triggerMotion' => array(
				'name' => 'triggerMotion',
				'cmd' => 'triggerMotion',
			),
			'toForeground' => array(
				'name' => 'toForeground',
				'cmd' => 'toForeground',
			),
			'startApplication' => array(
				'name' => 'startApplication',
				'cmd' => 'startApplication&package=#message#',
				'subtype' => 'message',

			),
	
			'textToSpeech' => array(
				'name' => 'textToSpeech',
				'cmd' => 'textToSpeech&text="#message#"',
				'subtype' => 'message',

			),
	
			'Refresh' => array(
				'name' => 'Refresh',
				'cmd' => 'deviceInfo',

			),			
		);

		self::$_infosMap = array(
	 		//'default' => array(
	 		//	'type' => 'info',
	 		//	'subtype' => 'numeric',
	 		//	'isvisible' => true,
	 		//	'restkey' =>'',
	 		//),
	 		'deviceModel' => array(
				'name' => "deviceModel",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'deviceModel',

			),
			
	 		'foregroundApp' => array(
				'name' => "foregroundApp",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'foregroundApp',

			),
			
	 		'appVersionName' => array(
				'name' => "appVersionName",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'appVersionName',

			),
			
	 		'ssid' => array(
				'name' => "ssid",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'ssid',

			),
	 		'deviceManufacturer' => array(
				'name' => "deviceManufacturer",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'deviceManufacturer',

			),
	 		'displayHeightPixels' => array(
				'name' => "displayHeightPixels",
				'type' => 'info',
				'subtype' => 'numeric',
				'isvisible' => true,
				'restkey' => 'displayHeightPixels',

			),
	 		'ip4' => array(
				'name' => "sip4sid",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'ip4',

			),
			
	 		'locationProvider' => array(
				'name' => "locationProvider",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'locationProvider',

			),
	 		'motionDetectorState' => array(
				'name' => "motionDetectorState",
				'type' => 'info',
				'subtype' => 'numeric',
				'isvisible' => true,
				'restkey' => 'motionDetectorState',

			),
	 		'keyguardLocked' => array(
				'name' => "keyguardLocked",
				'type' => 'info',
				'subtype' => 'binary',
				'isvisible' => true,
				'restkey' => 'keyguardLocked',

			),
	 		'isDeviceAdmin' => array(
				'name' => "isDeviceAdmin",
				'type' => 'info',
				'subtype' => 'binary',
				'isvisible' => true,
				'restkey' => 'isDeviceAdmin',

			),
	 		'screenBrightness' => array(
				'name' => "screenBrightness",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'screenBrightness',

			),
			'startUrl' => array(
				'name' => "startUrl",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'startUrl',

			),

			'currentPage' => array(
				'name' => "currentPage",
				'type' => 'info',
				'subtype' => 'string',
				'isvisible' => true,
				'restkey' => 'currentPage',

			),

			'batteryLevel' => array(
				'name' => "batteryLevel",
				'type' => 'info',
				'subtype' => 'numeric',
				'isvisible' => true,
				'unite' => '%',
				'restkey' => 'batteryLevel',

			),
	 		'plugged' => array(
				'name' => "plugged",
				'type' => 'info',
				'subtype' => 'binary',
				'isvisible' => true,
				'restkey' => 'plugged',

			),

			'isScreenOn' => array(
				'name' => "isScreenOn",
				'type' => 'info',
				'subtype' => 'binary',
				'isvisible' => true,
				'restkey' => 'isScreenOn',

			),
		);
	}

	public static function cron() {

	}

	/*
	* Fonction exécutée automatiquement toutes les heures par Jeedom
	public static function cronHourly() {

	}
	*/


	//* Fonction exécutée automatiquement tous les jours par Jeedom
	public static function cron5() {
		foreach (eqLogic::byType('fullyKiosK') as $fullyKiosK)
		{
			$fullyKiosK->getInformations();
			$mc = cache::byKey('fullyKiosKWidgetmobile' . $fullyKiosK->getId());
			$mc->remove();
			$mc = cache::byKey('fullyKiosKWidgetdashboard' . $fullyKiosK->getId());
			$mc->remove();
			$fullyKiosK->toHtml('mobile');
			$fullyKiosK->toHtml('dashboard');
			$fullyKiosK->refreshWidget();
		}
	}


	/*     * *********************Méthodes d'instance************************* */

	public function refresh() {
		try {
			$this->getInformations();
		} catch (Exception $exc) {
			log::add('fullyKiosK', 'error', __('Erreur pour ', __FILE__) . $eqLogic->getHumanName() . ' : ' . $exc->getMessage());
		}
	}

	public function getInformations($jsondata=null)
	{
		if ($this->getIsEnable() == 1)
		{
			$equipement = $this->getName();

			if(is_null($jsondata))
			{
				$ip = $this->getConfiguration('addressip');
				$password = $this->getConfiguration('password');

				$url = "http://{$ip}:2323/?type=json&cmd=deviceInfo";
				log::add('fullyKiosK', 'debug', __METHOD__.' '.__LINE__.' requesting '.$url);

				//$jsondata = file_get_contents($url);
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$jsondata = curl_exec($ch);
				curl_close($ch);
			}

 			log::add('fullyKiosK', 'debug', __METHOD__.' '.__LINE__.' $jsondata '.$jsondata);

 			$json = json_decode($jsondata,true);

 			if (is_null($json))
 			{
				log::add('fullyKiosK', 'info', 'Connexion KO for '.$equipement.' ('.$ip.')');
				$this->checkAndUpdateCmd('communicationStatus',false);
				return false;
			}

			$this->checkAndUpdateCmd('communicationStatus',true);

			self::initInfosMap();

			//update cmdinfo value
			foreach(self::$_infosMap as $cmdLogicalId=>$params)
			{
				if(isset($params['restkey'], $json[$params['restkey']]))
				{
					//log::add('fullyKiosK', 'debug',  __METHOD__.' '.__LINE__.' '.$cmdLogicalId.' => '.json_encode($json[$params['restkey']]));
					$value = $json[$params['restkey']];
					if(isset($params['cbTransform']) && is_callable($params['cbTransform']))
					{
						$value = call_user_func($params['cbTransform'], $value);
						//log::add('fullyKiosK', 'debug', __METHOD__.' '.__LINE__.' Transform to => '.json_encode($value));
					}

					$this->checkAndUpdateCmd($cmdLogicalId,$value);
				}
			}
			$this->refreshWidget();
			return true;
		}
	}

	public function postSave() {
		self::initInfosMap();
		$order = 0;

		//Cmd Actions
		foreach(self::$_actionMap as $cmdLogicalId => $params)
		{
			$fullyKiosKCmd = $this->getCmd('action', $cmdLogicalId);
			if (!is_object($fullyKiosKCmd))
			{
				log::add('fullyKiosK', 'debug', __METHOD__.' '.__LINE__.' cmdAction create '.$cmdLogicalId.'('.__($params['name'], __FILE__).') '.($params['subtype'] ?: 'subtypedefault'));
				$fullyKiosKCmd = new fullyKiosKCmd();

				$fullyKiosKCmd->setLogicalId($cmdLogicalId);
				$fullyKiosKCmd->setEqLogic_id($this->getId());
				$fullyKiosKCmd->setName(__($params['name'], __FILE__));
				$fullyKiosKCmd->setType($params['type'] ?: 'action');
				$fullyKiosKCmd->setSubType($params['subtype'] ?: 'other');
				$fullyKiosKCmd->setIsVisible($params['isvisible'] ?: true);
				if(isset($params['tpldesktop']))
					$fullyKiosKCmd->setTemplate('dashboard',$params['tpldesktop']);
				if(isset($params['tplmobile']))
					$fullyKiosKCmd->setTemplate('mobile',$params['tplmobile']);
				$fullyKiosKCmd->setOrder($order++);

				if(isset($params['linkedInfo']))
					$fullyKiosKCmd->setValue($this->getCmd('info', $params['linkedInfo']));

				$fullyKiosKCmd->save();
			}
		}

		//Cmd Infos
		foreach(self::$_infosMap as $cmdLogicalId=>$params)
		{
			$fullyKiosKCmd = $this->getCmd('info', $cmdLogicalId);
			if (!is_object($fullyKiosKCmd))
			{
				log::add('fullyKiosK', 'debug', __METHOD__.' '.__LINE__.' cmdInfo create '.$cmdLogicalId.'('.__($params['name'], __FILE__).') '.($params['subtype'] ?: 'subtypedefault'));
				$fullyKiosKCmd = new fullyKiosKCmd();

				$fullyKiosKCmd->setLogicalId($cmdLogicalId);
				$fullyKiosKCmd->setEqLogic_id($this->getId());
				$fullyKiosKCmd->setName(__($params['name'], __FILE__));
				$fullyKiosKCmd->setType($params['type'] ?: 'info');
				$fullyKiosKCmd->setSubType($params['subtype'] ?: 'numeric');
				$fullyKiosKCmd->setIsVisible($params['isvisible'] ?: false);
				if(isset($params['unite']))
					$fullyKiosKCmd->setUnite($params['unite']);
				$fullyKiosKCmd->setTemplate('dashboard',$params['tpldesktop']?: 'badge');
				$fullyKiosKCmd->setTemplate('mobile',$params['tplmobile']?: 'badge');
				$fullyKiosKCmd->setOrder($order++);

				$fullyKiosKCmd->save();
			}
		}

		//refreshcmdinfo
		$this->getInformations();
		
	}

	public function toHtml($_version = 'dashboard') {
		$replace = $this->preToHtml($_version);
		if (!is_array($replace)) {
			return $replace;
		}
		$version = jeedom::versionAlias($_version);
		$cmd_html = '';
		$br_before = 0;
		foreach ($this->getCmd(null, null, true) as $cmd) {
			if (isset($replace['#refresh_id#']) && $cmd->getId() == $replace['#refresh_id#']) {
				continue;
			}
			if ($br_before == 0 && $cmd->getDisplay('forceReturnLineBefore', 0) == 1) {
				$cmd_html .= '<br/>';
			}

			$cmd_html .= $cmd->toHtml($_version, '', $replace['#cmd-background-color#']);
			$br_before = 0;
			if ($cmd->getDisplay('forceReturnLineAfter', 0) == 1) {
				$cmd_html .= '<br/>';
				$br_before = 1;
			}
		}
		$replace['#cmd#'] = $cmd_html;
		return template_replace($replace, getTemplate('core', $version, 'fullyKiosK', 'fullyKiosK'));
	}

	/*     * **********************Getteur Setteur*************************** */
}

class fullyKiosKCmd extends cmd {
	/*     * *************************Attributs****************************** */

	/*     * ***********************Methode static*************************** */

	/*     * *********************Methode d'instance************************* */

	/*
	* Non obligatoire permet de demander de ne pas supprimer les commandes même si elles ne sont pas dans la nouvelle configuration de l'équipement envoyé en JS
	public function dontRemoveCmd() {
	return true;
	}
	*/
	public function execute($_options = array())
 	{
		log::add('fullyKiosK', 'debug', __METHOD__.'('.json_encode($_options).') Type: '.$this->getType().' logicalId: '.$this->getLogicalId());

		if ($this->getLogicalId() == 'refresh')
		{
			$this->getEqLogic()->refresh();
			return;
		}

		if( $this->getType() == 'action' )
		{

			if( $this->getSubType() == 'slider' && $_options['slider'] == '')
				return;

			fullyKiosK::initInfosMap();
			if (isset(fullyKiosK::$_actionMap[$this->getLogicalId()]))
			{
				$params = fullyKiosK::$_actionMap[$this->getLogicalId()];

				if(isset($params['callback']) && is_callable($params['callback']))
				{
					log::add('fullyKiosK', 'debug', __METHOD__.'calling back');
					call_user_func($params['callback'], $this);
				}elseif(isset($params['cmd']))
				{
					$cmdval = $params['cmd'];
					if($this->getSubType() == 'slider')
						$cmdval = str_replace('[[[VALUE]]]',$_options['slider'],$cmdval);
					if($this->getSubType() == 'message')
						$cmdval = str_replace('#message#',$_options['message'],$cmdval);


					$eqLogic = $this->getEqLogic();
					$ip = $eqLogic->getConfiguration('addressip');
					$password = $eqLogic->getConfiguration('password');
					$url = "http://{$ip}:2323/?cmd={$cmdval}&password={$password}";

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS,$cmdval);
					$jsondata = curl_exec($ch);
					curl_close($ch);
					log::add('fullyKiosK', 'debug', __METHOD__.'('.$url.' with '.$cmdval.') '.$jsondata);

					$eqLogic->getInformations($jsondata);
				}

				return true;
			}
		} else {
			throw new Exception(__('Commande non implémentée actuellement', __FILE__));
		}
		return false;
	}

	/*     * **********************Getteur Setteur*************************** */
}
/*
*/
?>
