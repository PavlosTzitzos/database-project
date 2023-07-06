using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace sdop.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Contact us.";

            return View();
        }
        public ActionResult Search()
        {
            ViewBag.Message = "Search in our db.";

            return View();
        }
        public ActionResult Insert()
        {
            ViewBag.Message = "Insert / Create.";

            return View();
        }
    }
}