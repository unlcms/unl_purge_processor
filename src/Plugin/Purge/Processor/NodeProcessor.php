<?php

namespace Drupal\unl_purge_processor\Plugin\Purge\Processor;

use Drupal\purge\Plugin\Purge\Processor\ProcessorInterface;
use Drupal\purge\Plugin\Purge\Processor\ProcessorBase;

/**
 * Node processor.
 *
 * @PurgeProcessor(
 *   id = "node",
 *   label = @Translation("Node processor"),
 *   description = @Translation("Processes the queue every time a node is saved."),
 *   enable_by_default = true,
 *   configform = "",
 * )
 */
class NodeProcessor extends ProcessorBase implements ProcessorInterface {

}
