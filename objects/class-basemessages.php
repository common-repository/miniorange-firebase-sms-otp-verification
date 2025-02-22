<?php
/**Load Interface BaseMessages
 *
 * @package miniorange-firebase-sms-otp-verification/objects
 */

namespace MoOTP\Objects;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'BaseMessages' ) ) {
	/**
	 * This is the constant class which lists all the texts
	 * that need to be supported for the Base Messages.
	 */
	class BaseMessages {

		const GLOBALLY_INVALID_PHONE_FORMAT = 'GLOBALLY_INVALID_PHONE_FORMAT';
		const INVALID_SCRIPTS               = 'INVALID_SCRIPTS';
		const OTP_SENT_PHONE                = 'OTP_SENT_PHONE';
		const OTP_SENT_EMAIL                = 'OTP_SENT_EMAIL';
		const ERROR_OTP_EMAIL               = 'ERROR_OTP_EMAIL';
		const ERROR_OTP_PHONE               = 'ERROR_OTP_PHONE';
		const ERROR_PHONE_FORMAT            = 'ERROR_PHONE_FORMAT';
		const ERROR_EMAIL_FORMAT            = 'ERROR_EMAIL_FORMAT';
		const OTP_VERIFIED                  = 'OTP_VERIFIED';
		const CHOOSE_METHOD                 = 'CHOOSE_METHOD';
		const PLEASE_VALIDATE               = 'PLEASE_VALIDATE';
		const PHONE_MISMATCH                = 'PHONE_MISMATCH';
		const REGISTER_WITH_US              = 'REGISTER_WITH_US';
		const ACTIVATE_PLUGIN               = 'ACTIVATE_PLUGIN';
		const CONFIG_GATEWAY                = 'CONFIG_GATEWAY';
		const ERROR_PHONE_BLOCKED           = 'ERROR_PHONE_BLOCKED';
		const ERROR_EMAIL_BLOCKED           = 'ERROR_EMAIL_BLOCKED';
		const FORM_NOT_AVAIL_HEAD           = 'FORM_NOT_AVAIL_HEAD';
		const FORM_NOT_AVAIL_BODY           = 'FORM_NOT_AVAIL_BODY';
		const CHANGE_SENDER_ID_BODY         = 'CHANGE_SENDER_ID_BODY';
		const CHANGE_SENDER_ID_HEAD         = 'CHANGE_SENDER_ID_HEAD';
		const CHANGE_EMAIL_ID_BODY          = 'CHANGE_EMAIL_ID_BODY';
		const CHANGE_EMAIL_ID_HEAD          = 'CHANGE_EMAIL_ID_HEAD';
		const COUNTRY_CODE_HEAD             = 'COUNTRY_CODE_HEAD';
		const COUNTRY_CODE_BODY             = 'COUNTRY_CODE_BODY';

		const SUPPORT_FORM_VALUES  = 'SUPPORT_FORM_VALUES';
		const SUPPORT_FORM_SENT    = 'SUPPORT_FORM_SENT';
		const SUPPORT_FORM_ERROR   = 'SUPPORT_FORM_ERROR';
		const FEEDBACK_SENT        = 'FEEDBACK_SENT';
		const FEEDBACK_ERROR       = 'FEEDBACK_ERROR';
		const SETTINGS_SAVED       = 'SETTINGS_SAVED';
		const REG_ERROR            = 'REG_ERROR';
		const MSG_TEMPLATE_SAVED   = 'MSG_TEMPLATE_SAVED';
		const SMS_TEMPLATE_SAVED   = 'SMS_TEMPLATE_SAVED';
		const SMS_TEMPLATE_ERROR   = 'SMS_TEMPLATE_ERROR';
		const EMAIL_TEMPLATE_SAVED = 'EMAIL_TEMPLATE_SAVED';
		const CUSTOM_MSG_SENT      = 'CUSTOM_MSG_SENT';
		const CUSTOM_MSG_SENT_FAIL = 'CUSTOM_MSG_SENT_FAIL';
		const EXTRA_SETTINGS_SAVED = 'EXTRA_SETTINGS_SAVED';
		const PASS_LENGTH          = 'PASS_LENGTH';
		const PASS_MISMATCH        = 'PASS_MISMATCH';
		const OTP_SENT             = 'OTP_SENT';
		const ERR_OTP              = 'ERR_OTP';
		const REG_SUCCESS          = 'REG_SUCCESS';
		const ACCOUNT_EXISTS       = 'ACCOUNT_EXISTS';
		const REG_COMPLETE         = 'REG_COMPLETE';
		const INVALID_OTP          = 'INVALID_OTP';
		const RESET_PASS           = 'RESET_PASS';
		const REQUIRED_FIELDS      = 'REQUIRED_FIELDS';
		const REQUIRED_OTP         = 'REQUIRED_OTP';
		const INVALID_SMS_OTP      = 'INVALID_SMS_OTP';
		const NEED_UPGRADE_MSG     = 'NEED_UPGRADE_MSG';
		const VERIFIED_LK          = 'VERIFIED_LK';
		const LK_IN_USE            = 'LK_IN_USE';
		const INVALID_LK           = 'INVALID_LK';
		const REG_REQUIRED         = 'REG_REQUIRED';
		const UNKNOWN_ERROR        = 'UNKNOWN_ERROR';
		const MO_REG_ENTER_PHONE   = 'MO_REG_ENTER_PHONE';
		const INVALID_OP           = 'INVALID_OP';
		const UPGRADE_MSG          = 'UPGRADE_MSG';
		const FREE_PLAN_MSG        = 'FREE_PLAN_MSG';
		const TRANS_LEFT_MSG       = 'TRANS_LEFT_MSG';
		const YOUR_GATEWAY_HEADER  = 'YOUR_GATEWAY_HEADER';
		const YOUR_GATEWAY_BODY    = 'YOUR_GATEWAY_BODY';
		const MO_GATEWAY_HEADER    = 'MO_GATEWAY_HEADER';
		const MO_GATEWAY_BODY      = 'MO_GATEWAY_BODY';
		const MO_PAYMENT           = 'MO_PAYMENT';

		const PHONE_NOT_FOUND      = 'PHONE_NOT_FOUND';
		const REGISTER_PHONE_LOGIN = 'REGISTER_PHONE_LOGIN';

		const LOGIN_MISSING_KEY = 'LOGIN_MISSING_KEY';
		const PHONE_EXISTS      = 'PHONE_EXISTS';

		const REQUIRED_TAGS                = 'REQUIRED_TAGS';
		const TEMPLATE_SAVED               = 'TEMPLATE_SAVED';
		const DEFAULT_SMS_TEMPLATE         = 'DEFAULT_SMS_TEMPLATE';
		const EMAIL_SUBJECT                = 'EMAIL_SUBJECT';
		const DEFAULT_EMAIL_TEMPLATE       = 'DEFAULT_EMAIL_TEMPLATE';
		const ADD_ON_VERIFIED              = 'ADD_ON_VERIFIED';
		const INVALID_PHONE                = 'INVALID_PHONE';
		const ERROR_SENDING_SMS            = 'ERROR_SENDING_SMS';
		const SMS_SENT_SUCCESS             = 'SMS_SENT_SUCCESS';
		const OTP_LENGTH_HEADER            = 'OTP_LENGTH_HEADER';
		const OTP_LENGTH_BODY              = 'OTP_LENGTH_BODY';
		const OTP_VALIDITY_HEADER          = 'OTP_VALIDITY_HEADER';
		const OTP_VALIDITY_BODY            = 'OTP_VALIDITY_BODY';
		const DEFAULT_BOX_HEADER           = 'DEFAULT_BOX_HEADER';
		const GO_BACK                      = 'GO_BACK';
		const RESEND_OTP                   = 'RESEND_OTP';
		const VALIDATE_OTP                 = 'VALIDATE_OTP';
		const VERIFY_CODE                  = 'VERIFY_CODE';
		const SEND_OTP                     = 'SEND_OTP';
		const VALIDATE_PHONE_NUMBER        = 'VALIDATE_PHONE_NUMBER';
		const VERIFY_CODE_DESC             = 'VERIFY_CODE_DESC';
		const MOFR_FORGOT_PASSWORD_MESSAGE = 'MOFR_FORGOT_PASSWORD_MESSAGE';
		const VISUAL_FORM_CHOOSE           = 'VISUAL_FORM_CHOOSE';
		const FORMIDABLE_CHOOSE            = 'FORMIDABLE_CHOOSE';
		const FORMMAKER_CHOOSE             = 'FORMMAKER_CHOOSE';
		const WC_BILLING_CHOOSE            = 'WC_BILLING_CHOOSE';
		const EMAIL_EXISTS                 = 'EMAIL_EXISTS';
		const INSTALL_PREMIUM_PLUGIN       = 'INSTALL_PREMIUM_PLUGIN';
		const FORGOT_PASSWORD_MESSAGE      = 'FORGOT_PASSWORD_MESSAGE';
		const ENTERPRIZE_EMAIL             = 'ENTERPRIZE_EMAIL';
		const REGISTRATION_ERROR           = 'REGISTRATION_ERROR';
		const CUSTOM_CHOOSE                = 'CUSTOM_CHOOSE';
		const GATEWAY_PARAM_NOTE           = 'GATEWAY_PARAM_NOTE';
		const CUSTOM_PACKS                 = 'CUSTOM_PACKS';
		const REMAINING_TRANSACTION_MSG    = 'REMAINING_TRANSACTION_MSG';
		const CUSTOM_FORM_MESSAGE          = 'CUSTOM_FORM_MESSAGE';
	}
}

