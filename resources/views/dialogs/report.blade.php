<dialog id="dialog_report">
    <a href="javascript:void(0)" onclick="closeDialog();" class="u-pinned-topright u-mr30 u-ml25 u-mt25"><i class="ion ion-ios-close-empty ion-3x"></i></a>

    <form method="post" action="/issues/report">

        @if(isset($issue_id))
            <input type="hidden" name="issue_id" value="{{$issue_id}}">
        @endif

        <div class="dialog-content">
            <h2 class="u-mr30">
                {{ trans('issues.problems_or_suggestions') }}.
            </h2>
            <p class="u-mv20">{{ trans('issues.experience_problems_report_well_get_back_to_you') }}</p>

            <div class="form-group form-fullwidth">
                <textarea name="feedback" class="form-input form-grey" value="" rows="4" placeholder="{{ trans('issues.placeholder_yourmessage') }}"></textarea>
            </div>
        </div>

        <hr>

        <div class="u-alignright">
            <a href="javascript:void(0)" onclick="closeDialog();" class="btn btn-tertiary u-mr10">{{ trans('auth.cancel_cap') }}</a>
            <button type="submit" id="post_announcement" class="btn btn-secondary">{{ trans('auth.send_cap') }}</button>
        </div>

    </form>

</dialog>
