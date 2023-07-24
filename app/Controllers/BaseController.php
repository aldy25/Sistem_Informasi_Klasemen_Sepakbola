<?php

namespace App\Controllers;

use App\Models\Modelakun;
use App\Models\Modelpasien;
use App\Models\Modelrm;
use App\Models\Modelriwayat;
use App\Models\Modelantigen;
use App\Models\Modelkir;
use App\Models\Modelkb;
use App\Models\Modelvitamin;
use App\Models\Modelsakit;
use App\Models\Modellayanan;
use App\Models\Modelobat;


use App\Models\Modeloperasi;
use App\Models\Modeljahit;
use App\Models\Modelkolestrol;
use App\Models\Modelasamurat;
use App\Models\Modelsunat;
use App\Models\Modelmasuk;
use App\Models\Modelkeluar;
use App\Models\Modelresep;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'url'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->session = \Config\Services::session();
        $this->Akun = new Modelakun();
        $this->Pasien = new Modelpasien();
        $this->Rm = new Modelrm();
        $this->Riwayat = new Modelriwayat();
        $this->Antigen = new Modelantigen();
        $this->Kb = new Modelkb();
        $this->Kir = new Modelkir();
        $this->Vitamin = new Modelvitamin();
        $this->Sakit = new Modelsakit();
        $this->Operasi = new Modeloperasi();
        $this->Jahit = new Modeljahit();
        $this->Kolestrol = new Modelkolestrol();
        $this->Asamurat = new Modelasamurat();
        $this->Sunat = new Modelsunat();
        $this->Layanan = new Modellayanan();
        $this->Obat = new Modelobat();
        $this->Masuk = new Modelmasuk();
        $this->Keluar = new Modelkeluar();
        $this->Resep = new Modelresep();
    }
}