<?php

/**
 * @file
 * Contains \Drupal\rest\LinkManager\LinkManagerBase.
 */

namespace Drupal\rest\LinkManager;
use Drupal\Core\Url;

/**
 * Defines an abstract base-class for REST link manager objects.
 */
abstract class LinkManagerBase {

  /**
   * Link domain used for type links URIs.
   *
   * @var string
   */
  protected $linkDomain;

  /**
   * Config factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The request stack.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * {@inheritdoc}
   */
  public function setLinkDomain($domain) {
    $this->linkDomain = rtrim($domain, '/');
    return $this;
  }

  /**
   * Gets the link domain.
   *
   * @return string
   *   The link domain.
   */
  protected function getLinkDomain() {
    if (empty($this->linkDomain)) {
      if ($domain = $this->configFactory->get('rest.settings')->get('link_domain')) {
        $this->linkDomain = rtrim($domain, '/');
      }
      else {
        $request = $this->requestStack->getCurrentRequest();
        $this->linkDomain = $request->getSchemeAndHttpHost() . $request->getBasePath();
      }
    }
    return $this->linkDomain;
  }

}
