<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2020 (original work) janfix;
 *               
 * 
 */

/**
 * Generated using taoDevTools 3.12.2 and jp 
 */
use oat\pciBox\scripts\install\RegisterPciBoxer;

return array(
    'name' => 'pciBox',
    'label' => 'PCI Box laboratory extension ',
    'description' => 'This extension is experimental and want to exist as a specific one',
    'license' => 'GPL-2.0',
    'version' => '1.0.0',
    'author' => 'janfix',
    'requires' => array(
        'taoQtiItem' => '>=17.1.0',
        'qtiItemPci' => '>=4.6.5'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#pciWiquidManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#pciWiquidManager', array('ext'=>'pciBox')),
    ),
    'install' => array(
        'php'	=> array(
            RegisterPciBoxer::class
		)
    ),
    'update' => 'oat\\pciBox\\scripts\\update\\Updater',
    'uninstall' => array(
    ),
    'routes' => array(
        '/pciBox' => 'oat\\pciBox\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'pciBox/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);