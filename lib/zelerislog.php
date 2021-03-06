<?php
/**
 * 2007-2015 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    L�nea Gr�fica E.C.E. S.L.- https://www.lineagrafica.es/ <soporte@lineagrafica.es>
 * @copyright 2007-2015 TELEFONICA SERVICIOS INTEGRALES DE DISTRIBUCI�N S.A.U.
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of TELEFONICA SERVICIOS INTEGRALES DE DISTRIBUCI�N S.A.U.
 */

class ZelerisLog 
{	
	public static function mensaje($mensaje,$level){
    	$file = _PS_MODULE_DIR_.'zeleriscarrier/zeleris.log';
        $handler = fopen($file,'a');
        fwrite($handler,"[".date("r")."] PrestaShop ver:"._PS_VERSION_." -> $level: $message\n\r");
        fclose($handler);
    }
    public static function error($message){
        $level = 'ERROR';
        self::mensaje($message, $level);
    }
    public static function info($message){
        $level = 'INFO';
        self::mensaje($message, $level);
    }    
}