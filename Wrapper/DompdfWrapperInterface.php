<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\DompdfBundle\Wrapper;

use Dompdf\Dompdf;
use Dompdf\Options;

interface DompdfWrapperInterface
{
    /**
     * Renders a pdf document and streams it to the browser.
     *
     * @param string    $html         The html sourcecode to render
     * @param string    $filename     The name of the docuemtn
     * @param string[]  $options      The rendering options (see dompdf docs)
     * @param bool|true $replacePaths Appends the basepath to file links
     *
     * @throws \Exception
     */
    public function streamHtml(string $html, string $filename, array $options = array(), bool $replacePaths = true);

    /**
     * Renders a pdf document and return the binary content.
     *
     * @param string    $html         The html sourcecode to render
     * @param array     $options      The rendering options (see dompdf docs)
     * @param bool|true $replacePaths Appends the basepath to file links
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getPdf(string $html, array $options = array(), bool $replacePaths = true);

    /**
     * Creates a new Dompdf instance.
     *
     * @return Dompdf
     */
    public function createDompdf(): Dompdf;

    /**
     * Creates a a new Option instance.
     *
     * @param string[] $options An array of dompdf options
     *
     * @return Options
     */
    public function createOptions(array $options = array()): Options;
}
