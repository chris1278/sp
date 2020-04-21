<?php
/**
*
* @package phpBB Extension - Benutzerdefnierte Sprachvariabelen
* @copyright (c) 2017 ()
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace chris1278\sp\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
   /** @var string phpbb_root_path */
   protected $root_path;

   /**
   * Constructor
   */
   public function __construct($phpbb_root_path)
   {
      $this->root_path = $phpbb_root_path;
      
   }
   
   static public function getSubscribedEvents()
   {
      return array(
         'core.user_setup' => 'load_language_on_setup',
      );
   }

/**
   * Load language during user setup
   *
   * @param object $event The event object
   * @return null
   */
   public function load_language_on_setup($event)
   {
      $lang_set_ext = $event['lang_set_ext'];
      $lang_set_ext[] = array(
         'ext_name'   => 'chris1278/sp',
         'lang_set'   => 'sp',
      );

      $event['lang_set_ext'] = $lang_set_ext;
   }
}