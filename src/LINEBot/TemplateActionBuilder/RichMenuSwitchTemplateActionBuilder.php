<?php


namespace LINE\LINEBot\TemplateActionBuilder;

use LINE\LINEBot\Constant\ActionType;

/**
 * A builder class for richmenuswitch action.
 */
class RichMenuSwitchTemplateActionBuilder
{

    /** @var string */
    private $richMenuAliasId;
    /** @var string */
    private $label;
    /** @var string */
    private $data;

    /**
     * RichMenuSwitchTemplateAction constructor.
     *
     * @param string $richMenuAliasId Set of RichmenuAliasId
     * @param string $data            response on success
     * @param null   $label           Label of action.
     */
    public function __construct($richMenuAliasId, $data, $label = null)
    {
        $this->richMenuAliasId = $richMenuAliasId;
        $this->data            = $data;
        $this->label           = $label;
    }

    /**
     * Builds message action structure.
     *
     * @return array Built message action structure.
     */
    public function buildTemplateAction()
    {
        $action = [
            'type'            => ActionType::RICH_MENU_SWITCH,
            'richMenuAliasId' => $this->richMenuAliasId,
            'data'            => $this->data,
        ];
        if (isset($this->label)) {
            $action['label'] = $this->label;
        }

        return $action;
    }

}