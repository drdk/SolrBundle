<?php

namespace FS\SolrBundle\Tests\Fixtures;

use FS\SolrBundle\Doctrine\Annotation as Solr;

/**
 * @Solr\Document
 * @Solr\SynchronizationFilter(callback="shouldBeIndex")
 */
class InvalidTestEntityFiltered
{
    /**
     * @Solr\Id
     *
     * @var int
     */
    private $id;
}

