<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Gspann\Hellow\Controller\Index;


/**
 * Catalog index page controller.
 */
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function __construct(
      \Magento\Framework\App\Action\Context $context,
      \Magento\Framework\View\Result\PageFactory $resultPageFactory
      )
    {
      $this->resultPageFactory = $resultPageFactory;
      parent::__construct($context);
    }

    public function execute()
    {
      echo "hellow Magento2";
      exit;
    }
}
