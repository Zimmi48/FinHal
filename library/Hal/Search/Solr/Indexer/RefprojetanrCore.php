<?php
/**
 * Created by PhpStorm.
 * User: marmol
 * Date: 22/01/18
 * Time: 16:16
 */

require_once 'Ccsd/Search/Solr/Indexer/Core.php';
require_once 'Ccsd/Search/Solr.php';
require_once 'Ccsd/Search/Solr/Indexer.php';
require_once 'Ccsd/Search/Solr/Indexer/RefProjanr.php';

/**
 * Class Hal_Search_Solr_Indexer_Core
 *
 * Classe utilise avec les scripts d'indexation pour definir le core utilise et traiter le options specifique de ce Core
 *
 */
class Hal_Search_Solr_Indexer_RefProjetanrCore extends  Ccsd_Search_Solr_Indexer_Core
{
    /** @var string  */
    public static $indexerClass =  'Ccsd_Search_Solr_Indexer_RefProjanr';
}

Ccsd_Search_Solr_Indexer_Core::registerCore( 'Hal_Search_Solr_Indexer_RefProjetanrCore');