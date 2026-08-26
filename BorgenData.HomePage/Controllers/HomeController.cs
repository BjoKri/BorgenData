using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace BorgenData.HomePage.Controllers
{
    public class HomeController : Controller
    {
        public HomeController()
        {
            ViewBag.CodeContent = "";
        }
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult Om()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult TaKontakt()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult Rensing()
        {
            ViewBag.Message = "Your Cleaning page.";

            return View();
        }
        public ActionResult Backup()
        {
            ViewBag.Message = "Your Backup page.";

            return View();
        }
        public ActionResult Oppgradering()
        {
            ViewBag.Message = "Your Upgrade page.";

            return View();
        }
        public ActionResult Reparasjon()
        {
            ViewBag.Message = "Your Repair page.";

            return View();
        }        
        public ActionResult DataSaving()
        {
            ViewBag.Message = "Your DataSaving page.";

            return View();
        }       
        
        public ActionResult WebDesign()
        {
            ViewBag.Message = "Your WebDesign page.";

            return View();
        }

    }
}