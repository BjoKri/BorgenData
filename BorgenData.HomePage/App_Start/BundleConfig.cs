using System.Web;
using System.Web.Optimization;

namespace BorgenData.HomePage
{
    public class BundleConfig
    {
        // For more information on bundling, visit http://go.microsoft.com/fwlink/?LinkId=301862
        public static void RegisterBundles(BundleCollection bundles)
        {
           
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery-{version}.js"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryval").Include(
                        "~/Scripts/jquery.validate*"));

            bundles.Add(new ScriptBundle("~/bundles/bjqs").Include(
                        "~/Scripts/bjqs.js"));           

    //           <script src="~/Scripts/jquery-1.10.2.min.js"></script>
    //<script src="~/Scripts/bjqs-1.3.js"></script>
    //<script src="~/Scripts/vendor/modernizr-2.6.2.min.js"></script>

            // Use the development version of Modernizr to develop with and learn from. Then, when you're
            // ready for production, use the build tool at http://modernizr.com to pick only the tests you need.
            bundles.Add(new ScriptBundle("~/bundles/modernizr").Include(
                        "~/Scripts/modernizr-*"));

            bundles.Add(new ScriptBundle("~/bundles/bootstrap").Include(
                      "~/Scripts/bootstrap.js",
                      "~/Scripts/respond.js"));

            bundles.Add(new StyleBundle("~/Content/Css/Styles")
                .Include(
                      "~/Content/Css/main.css",
                      "~/Content/Css/style.css",
                      "~/Content/Css/nav.css",
                      "~/Content/Css/bjqs.css",
                      "~/Content/Css/normalize.css"));
        }
    }
}
