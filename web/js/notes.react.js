var CampaignSection = React.createClass({
    getInitialState: function () {
        return {
            campaigns: []
        }
    },

    componentDidMount: function () {
        this.loadNotesFromServer();
        setInterval(this.loadNotesFromServer, 3000);
    },

    loadNotesFromServer: function () {
        $.ajax({
            url: this.props.url,
            success: function (data) {
                this.setState({campaigns: data.campaigns});
            }.bind(this)
        });
    },

    render: function () {
        return (
            <div>
                <div>
                    <h2 className="campaign-header">Campaigns</h2>
                </div>
                <CampaignList campaigns={this.state.campaigns}/>
            </div>
        );
    }
});

var CampaignList = React.createClass({
    render: function () {
        var campaignNodes = this.props.campaigns.map(function (campaign) {
            return (
                <CampaignBox
                    id={campaign.id}
                    name={campaign.name}
                    address={campaign.address}
                    text={campaign.text}
                    key={campaign.id}>{campaign.text}
                </CampaignBox>
            );
        });

        return (
            <section>
                {campaignNodes}
            </section>
        );
    }
});

var CampaignBox = React.createClass({
    render: function () {
        return (
            <div className="nosp-container">
                <div className="nosp-photo"></div>
                <div className="nosp-details">
                    <dl className="nosp-details-list">
                        <dt>ID:</dt>
                        <dd>{ this.props.id }</dd>
                        <dt>Name:</dt>
                        <dd>{ this.props.name }</dd>
                        <dt>Address:</dt>
                        <dd>{ this.props.address }</dd>
                        <dt>Text:</dt>
                        <dd>{ this.props.text }</dd>
                    </dl>
                </div>
            </div>
        );
    }
});

window.CampaignSection = CampaignSection;
