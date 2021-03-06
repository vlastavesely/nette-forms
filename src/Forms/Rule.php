<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Forms;

use Nette;


/**
 * Single validation rule or condition represented as value object.
 */
class Rule
{
	use Nette\SmartObject;

	/** @var IControl */
	public $control;

	/** @var mixed */
	public $validator;

	/** @var mixed */
	public $arg;

	/** @var bool */
	public $isNegative = FALSE;

	/** @var string */
	public $message;

	/** @var Rules  for conditions */
	public $branch;

}
