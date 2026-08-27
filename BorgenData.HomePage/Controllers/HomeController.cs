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
            return View();
        }

        public ActionResult TaKontakt()
        {
            return View();
        }

        public ActionResult Rensing()
        {
            return View();
        }

        public ActionResult Oppgradering()
        {
            return View();
        }

        public ActionResult Reparasjon()
        {
            return View();
        }
    }
}
