<?php

namespace Davesweb\BackpackHelpers\Fields;

class SimpleMDE extends Field
{
    public function make(
        ?bool $promptURLs = null,
        ?bool $status = null,
        ?bool $spellChecker = null,
        ?bool $forceSync = null,
        ?array $simpleMDEAttributesRaw = null
    ): array {
        $this->type = 'simplemde';

        $merge = [];

        if (null !== $promptURLs) {
            if (!isset($merge['simplemdeAttributes'])) {
                $merge['simplemdeAttributes'] = [];
            }

            $merge['simplemdeAttributes']['promptURLs'] = $promptURLs;
        }

        if (null !== $status) {
            if (!isset($merge['simplemdeAttributes'])) {
                $merge['simplemdeAttributes'] = [];
            }

            $merge['simplemdeAttributes']['status'] = $status;
        }

        if (null !== $spellChecker) {
            if (!isset($merge['simplemdeAttributes'])) {
                $merge['simplemdeAttributes'] = [];
            }

            $merge['simplemdeAttributes']['spellChecker'] = $spellChecker;
        }

        if (null !== $forceSync) {
            if (!isset($merge['simplemdeAttributes'])) {
                $merge['simplemdeAttributes'] = [];
            }

            $merge['simplemdeAttributes']['forceSync'] = $forceSync;
        }

        if (null !== $simpleMDEAttributesRaw) {
            $merge['simpleMDEAttributesRaw'] = $simpleMDEAttributesRaw;
        }

        return parent::makeField() + $merge;
    }
}
