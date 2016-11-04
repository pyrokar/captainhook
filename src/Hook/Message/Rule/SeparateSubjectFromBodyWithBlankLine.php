<?php
/**
 * This file is part of CaptainHook.
 *
 * (c) Sebastian Feldmann <sf@sebastian.feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace sebastianfeldmann\CaptainHook\Hook\Message\Rule;

use sebastianfeldmann\CaptainHook\Git\CommitMessage;

/**
 * Class SeparateSubjectFromBodyWithBlankLine
 *
 * @package CaptainHook
 * @author  Sebastian Feldmann <sf@sebastian-feldmann.info>
 * @link    https://github.com/sebastianfeldmann/captainhook
 * @since   Class available since Release 0.9.0
 */
class SeparateSubjectFromBodyWithBlankLine extends Base
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->hint = 'Subject and body have to be separated by a blank line';
    }

    /**
     * Check if subject and body are separated by a blank line.
     *
     * @param  \sebastianfeldmann\CaptainHook\Git\CommitMessage $msg
     * @return bool
     */
    public function pass(CommitMessage $msg) : bool
    {
        return $msg->getLineCount() < 2 || empty($msg->getLine(1));
    }
}
