<?php
/**
 * @file upch/classes/security/authorization/internal/UPCH_SubmissionNotArchivedPolicy.inc.php
 *
 * [UPCH]
 *
 * Validacion de submissions por estado archivado.
 *
 * @class UPCH_SubmissionNotArchivedPolicy
 * @ingroup security_authorization_internal
 *
 * @brief Policy that ensures that the request contains a valid submission.
 */

import('lib.pkp.classes.security.authorization.DataObjectRequiredPolicy');

class UPCH_SubmissionNotArchivedPolicy extends DataObjectRequiredPolicy {
	/**
	 * Constructor
	 * @param $request PKPRequest
	 * @param $args array request parameters
	 * @param $submissionParameterName string the request parameter we expect
	 *  the submission id in.
	 */
	function __construct($request, &$args, $submissionParameterName = 'submissionId', $operations = null) {
		parent::__construct($request, $args, $submissionParameterName, 'user.authorization.invalidSubmission', $operations);

		$callOnDeny = array($request->getDispatcher(), 'handle404', array());
		$this->setAdvice(
			AUTHORIZATION_ADVICE_CALL_ON_DENY,
			$callOnDeny
		);
	}

	/**
     * [UPCH]
     *
     * Varificar que el estado del submission no sea archivado.
     *
	 * @see DataObjectRequiredPolicy::dataObjectEffect()
	 */
	function dataObjectEffect() {
		// Get the submission id.
		$submissionId = $this->getDataObjectId();
		if ($submissionId === false) return AUTHORIZATION_DENY;

		// Validate the submission id.
		$submissionDao = Application::getSubmissionDAO();
		$submission = $submissionDao->getById($submissionId);
		if (!is_a($submission, 'Submission')) return AUTHORIZATION_DENY;

		// [UPCH] validar el estado
        if ($submission->getStatus() == UPCH_STATUS_ARCHIVED) return AUTHORIZATION_DENY; // STATUS_ARCHIVED

		return AUTHORIZATION_PERMIT;
	}
}


