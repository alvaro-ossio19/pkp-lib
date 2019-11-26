{**
 * templates/submission/form/complete.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * The submission process has been completed; notify the author.
 *}
{assign var="contextName" value=$context->getLocalizedName()} {* [UPCH] *}
<h2>{translate key="submission.submit.submissionComplete"}</h2>
<p>{translate key="submission.submit.submissionCompleteThanks" contextName=$contextName}</p>{* [UPCH] *}
<div class="separator"></div>
<h3>{translate key="submission.submit.whatNext"}</h3>
<p>{translate key="submission.submit.whatNext.description" contextName=$contextName}</p>{* [UPCH] *}
<p>{translate key="submission.submit.whatNext.forNow"}</p>

<ul class="plain">
	<li><a href={$reviewSubmissionUrl}>{translate key="submission.submit.whatNext.review"}</a></li>
	{*<li><a href={url page="submission" op="wizard"}>{translate key="submission.submit.whatNext.create"}</a></li>*} {*[UPCH] boton crear*}
	<li><a href={url page="submissions" anchor="submissions"}>{translate key="submission.submit.whatNext.return"}</a></li>
</ul>
