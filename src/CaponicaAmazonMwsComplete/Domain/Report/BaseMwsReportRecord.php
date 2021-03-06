<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates shared methods for all report records
 */
abstract class BaseMwsReportRecord {
    public function convertRowStringToArray($rowString, $expectedFieldCount) {
        $fieldArray = explode("\t", trim($rowString, "\n"));
        $fieldCount = count($fieldArray);

        if ($expectedFieldCount != $fieldCount) {
            throw new InvalidReportRecordException("Expected $expectedFieldCount fields, but found $fieldCount.");
        }

        return $fieldArray;
    }
}