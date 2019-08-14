<?php


namespace HepRestApi\Scenarios;


class DappHelper extends BaseHelper
{

    /**
     * @return \HepRestApi\Model\RetrieveDappDailyStatsResponse
     * @throws \HepRestApi\ApiException
     */
    public function daily_stats()
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        $date = date('Ymd');
        $response = $this->api_client->restDappsRead_0(
            $this->api_version,
            $this->dapp_id,
            $date,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }

    /**
     * Get the daily statistics of NewForce
     * @return \HepRestApi\Model\NewforceDailyStatsResponse
     * @throws \HepRestApi\ApiException
     */
    public function newforce_stats()
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        $date = date('Ymd');
        $response = $this->api_client->restNewforceRead(
            $this->api_version,
            $date,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }

    /**
     * read newid
     * @param $newId
     * @return \HepRestApi\Model\NewidResponse
     * @throws \HepRestApi\ApiException
     */
    public function newid($newId)
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        // $api_version, $newid, $dapp_key, $protocol, $version, $ts, $nonce, $os, $language, $dapp_signature_method, $dapp_signature
        $response = $this->api_client->restNewidsRead(
            $this->api_version,
            $newId,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }

    /**
     * Get the information of given oracle
     * read dapp
     * @return \HepRestApi\Model\Dapp
     * @throws \HepRestApi\ApiException
     */
    public function profile()
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        $response = $this->api_client->restDappsRead(
            $this->api_version,
            $this->dapp_id,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }

    /**
     * Get the transaction information of given txid
     * @param string $txId
     * @return \HepRestApi\Model\NewchainTransactionResponse
     * @throws \HepRestApi\ApiException
     */
    public function newchain_tx($txId)
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        $response = $this->api_client->restNewchainTxRead(
            $this->api_version,
            $txId,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }

    /**
     * @param $oracle_id
     * @return \HepRestApi\Model\RetrieveOracleResponse
     * @throws \HepRestApi\ApiException
     */
    public function oracle($oracle_id = 'default')
    {
        $sign_data = $this->generate_sign_data();
        $hmac_data = $this->sign_hmac($sign_data);

        $response = $this->api_client->restOraclesRead(
            $this->api_version,
            $oracle_id,
            $hmac_data['dapp_key'],
            $hmac_data['protocol'],
            $hmac_data['version'],
            $hmac_data['ts'],
            $hmac_data['nonce'],
            $hmac_data['os'],
            $hmac_data['language'],
            $hmac_data['dapp_signature_method'],
            $hmac_data['dapp_signature']
        );

        return $response;
    }
}