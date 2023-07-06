using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using sdop.Models;

namespace sdop.Controllers
{
    public class DistributorsController : Controller
    {
        private DistributorDBContext db = new DistributorDBContext();

        // GET: Distributors
        public ActionResult Index(string searchName)
        {
            var distributors = from d in db.Distributors select d;

            if (!String.IsNullOrEmpty(searchName))
            {
                distributors = distributors.Where(s => s.DistributorName.Contains(searchName));
            }
            
            return View(db.Distributors.ToList());
        }

        // GET: Distributors/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Distributor distributor = db.Distributors.Find(id);
            if (distributor == null)
            {
                return HttpNotFound();
            }
            return View(distributor);
        }

        // GET: Distributors/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Distributors/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "DistributorId,DistributorName,Points,DistributorCapacity,MeanDistrTimeHours,DistrRangeKm")] Distributor distributor)
        {
            if (ModelState.IsValid)
            {
                db.Distributors.Add(distributor);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(distributor);
        }

        // GET: Distributors/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Distributor distributor = db.Distributors.Find(id);
            if (distributor == null)
            {
                return HttpNotFound();
            }
            return View(distributor);
        }

        // POST: Distributors/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "DistributorId,DistributorName,Points,DistributorCapacity,MeanDistrTimeHours,DistrRangeKm")] Distributor distributor)
        {
            if (ModelState.IsValid)
            {
                db.Entry(distributor).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(distributor);
        }

        // GET: Distributors/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Distributor distributor = db.Distributors.Find(id);
            if (distributor == null)
            {
                return HttpNotFound();
            }
            return View(distributor);
        }

        // POST: Distributors/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Distributor distributor = db.Distributors.Find(id);
            db.Distributors.Remove(distributor);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
