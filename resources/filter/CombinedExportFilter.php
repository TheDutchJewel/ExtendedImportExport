<?php

declare(strict_types=1);

namespace Jefferson49\Webtrees\Module\DownloadGedcomWithURL;

/**
 * An export filter, which combines two other export filters
 */
class CombinedExportFilter extends AbstractExportFilter implements ExportFilterInterface
{
  /**
   * Include a set of other filters, which shall be executed before the current filter
   *
   * @return array<ExportFilterInterface>    A set of included export filters
   */
  public function getIncludedFiltersBefore(): array {

    return [
      new BirthMarriageDeathExportFilter(),
      new Gedcom7ExportFilter(),
      new RemoveEmptyRecordsExportFilter(),      
    ];
  }
}