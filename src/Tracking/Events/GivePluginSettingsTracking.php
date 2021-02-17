<?php
namespace Give\Tracking\Events;

use Give\Tracking\Contracts\TrackEvent;
use Give\Tracking\Track;
use Give\Tracking\TrackingData\GivePluginSettingsData;
use Give\Tracking\ValueObjects\EventType;

/**
 * Class GivePluginSettingsTracking
 *
 * This class setup event to send tracked data request when Give plugin settings update.
 *
 * @since 2.10.0
 * @package Give\Tracking\Events
 */
class GivePluginSettingsTracking extends TrackEvent {
	/**
	 * @var string
	 */
	protected $trackId;

	/**
	 * @var string
	 */
	protected $dataClassName = GivePluginSettingsData::class;

	/**
	 * GivePluginSettingsTracking constructor.
	 *
	 * @param  Track  $track
	 */
	public function __construct( Track $track ) {
		$this->trackId = ( new EventType() )->getPluginSettingsUpdated();
		parent::__construct( $track );
	}
}
