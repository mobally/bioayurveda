<?php
/**
 * @category    WeltPixel
 * @package     WeltPixel_EnhancedEmail
 * @copyright   Copyright (c) 2018 Weltpixel
 * @author      Nagy Attila @ Weltpixel TEAM
 */

namespace WeltPixel\EnhancedEmail\Controller\Adminhtml\Email\Template;

use Magento\Framework\App\TemplateTypesInterface;

/**
 * Class Save
 * @package WeltPixel\EnhancedEmail\Controller\Adminhtml\Email\Template
 */
class Save extends \Magento\Email\Controller\Adminhtml\Email\Template\Save
{
    /**
     * Save transactional email action
     *
     * @return void
     */
    public function execute()
    {
        $request = $this->getRequest();
        $id = $this->getRequest()->getParam('id');

        $template = $this->_initTemplate('id');
        if (!$template->getId() && $id) {
            $this->messageManager->addError(__('This email template no longer exists.'));
            $this->_redirect('adminhtml/*/');
            return;
        }

        try {
            $template->setTemplateSubject(
                $request->getParam('template_subject')
            )->setTemplateCode(
                $request->getParam('template_code')
            )->setTemplateText(
                $request->getParam('template_text')
            )->setTemplateStyles(
                $request->getParam('template_styles')
            )->setModifiedAt(
                $this->_objectManager->get(\Magento\Framework\Stdlib\DateTime\DateTime::class)->gmtDate()
            )->setOrigTemplateCode(
                $request->getParam('orig_template_code')
            )->setOrigTemplateVariables(
                $request->getParam('orig_template_variables')
            )->setTemplatePreheader(
                $request->getParam('template_preheader')
            );

            if (!$template->getId()) {
                $template->setTemplateType(TemplateTypesInterface::TYPE_HTML);
            }

            if ($request->getParam('_change_type_flag')) {
                $template->setTemplateType(TemplateTypesInterface::TYPE_TEXT);
                $template->setTemplateStyles('');
            }

            $template->save();
            $this->_objectManager->get(\Magento\Backend\Model\Session::class)->setFormData(false);
            $this->messageManager->addSuccess(__('You saved the email template.'));
            $this->_redirect('adminhtml/*');
        } catch (\Exception $e) {
            $this->_objectManager->get(
                \Magento\Backend\Model\Session::class
            )->setData(
                'email_template_form_data',
                $request->getParams()
            );
            $this->messageManager->addError($e->getMessage());
            $this->_forward('new');
        }
    }
}
